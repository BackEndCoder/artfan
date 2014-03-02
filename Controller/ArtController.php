<?php
class ArtController extends AppController {

	public $name = 'Art';

	public $helpers = array('Html', 'Form', 'Text');

	public $giftCategoryId = 11;

	public $giftColorId = 12;

	public $giftStyleId = 11;

	public function index() {
		foreach ($this->request->params['named'] as $k => $v):
        	$$k = $v;
        endforeach;
        foreach ($this->request->query as $k => $v):
        	$$k = $v;
        endforeach;
		$options = array(
			'limit' => 20,
			'order' => array('Art.id' => 'asc'),
			'conditions' => array(array('Art.category_id NOT' => $this->giftCategoryId,
			'Art.color_id NOT' => $this->giftColorId,
			'Art.style_id NOT' => $this->giftStyleId
			)));
		if(!empty($category)){
			$this->set('catname', $this->Art->Category->getCategoryName($category));
			$options['conditions'][0]['Art.category_id'] = $category;
		}
		if(!empty($color)){
			$this->set('colorname', $this->Art->Color->getColorName($color));
			$options['conditions'][0]['Art.color_id'] = $color;
		}
		if(!empty($style)){
			$this->set('stylename', $this->Art->Style->getStyleName($style));
			$options['conditions'][0]['Art.style_id'] = $style;
		}
		$this->paginate = $options;
		$art = $this->paginate('Art');
		$this->set('art', $art);
		$this->layout = "default";
	}

	public function admin_index() {
		$user = $this->Auth->user();
		if ($user['role_id'] == 1) {
			$this->paginate = array(
				'limit' => 10,
				'order' => array('Art.id' => 'asc'),
				'conditions' => array('Art.category_id NOT' => $this->giftCategoryId,
					'Art.color_id NOT' => $this->giftColorId,
					'Art.style_id NOT' => $this->giftStyleId
					)
				);
			$art = $this->paginate('Art');
		} else {
			$this->paginate = array(
				'limit' => 10,
				'conditions' => array(
					'Art.author' => $user['id'],
					'Art.category_id NOT' => $this->giftCategoryId,
					'Art.color_id NOT' => $this->giftColorId,
					'Art.style_id NOT' => $this->giftStyleId
					),
				'order' => array('Art.id' => 'asc')
				);
			$art = $this->paginate('Art');
		}

		$this->set('art', $art);
	}

	public function admin_add() {
		$user = $this->Auth->user();

		if ($user['role_id'] == 1) {
			$categories = $this->Art->Category->find('list', array('fields' => array('Category.id', 'Category.catname')));
			$styles = $this->Art->Style->find('list', array('fields' => array('Style.id', 'Style.stylename')));
			$colors = $this->Art->Color->find('list', array('fields' => array('Color.id', 'Color.colorname')));
		} else {
			$categories = $this->Art->Category->find('list', array('fields' => array('Category.id', 'Category.catname'),
				'conditions' => array('id NOT' => $this->giftCategoryId)));
			$styles = $this->Art->Style->find('list', array('fields' => array('Style.id', 'Style.stylename'),
				'conditions' => array('id NOT' => $this->giftStyleId)));
			$colors = $this->Art->Color->find('list', array('fields' => array('Color.id', 'Color.colorname'),
				'conditions' => array('id NOT' => $this->giftColorId)));
		}
		$this->set('categories', $categories);
		$this->set('styles', $styles);
		$this->set('colors', $colors);

		$user = $this->Auth->user();
		if ($this->request->is('post')) {
			$IsImgValid = $this->validateArtImg();
			if ($this->Art->save($this->data)) {
				$InsertId = $this->Art->id;
				$folderUrl = WWW_ROOT . "files/ArtImages/" . $InsertId . "/";
				if (is_dir($folderUrl) != 1) {
					mkdir($folderUrl);
				}
				$image = $this->data['Art']['myimage'];
				foreach ($image as $item) {
					move_uploaded_file($item['tmp_name'], $folderUrl . $item['name']);
				}
				$this->redirect(array('action' => 'index'));
				$this->Session->setFlash("The art has been saved");
			}
			else {
				$this->Session->setFlash('The art could not be saved. Please, try again.');
			}
		}
	}

	public function validateArtImg() {
		return false;
	}

	public function admin_edit($id = null) {
		$this->Art->id = $id;

		if (!$this->Art->exists()) {
			throw new NotFoundException('Invalid Art');
		}

		$folderUrl = WWW_ROOT . "files/ArtImages/" . $id . "/";

		if ($this->request->is('post') || $this->request->is('put')) {
			$deletedImages = $this->data['deletedImages'];
			if (!empty($deletedImages)) {
				$deletedImagesArr = split(',', $deletedImages);
				foreach ($deletedImagesArr as $image) {
					$imageName = split('/', $image);
					unlink($folderUrl . $imageName[count($imageName) - 1]);
				}
			}
			$image = $this->data['Art']['myimage'];
			foreach ($image as $item) {
				move_uploaded_file($item['tmp_name'], $folderUrl . $item['name']);
			}

			if ($this->Art->save($this->request->data)) {
				$this->Session->setFlash('The art has been saved');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The art could not be saved. Please, try again.');
			}
		} else {
			$this->request->data = $this->Art->read();
			$httpUrl = $this->base . "/files/ArtImages/" . $id . "/";
			$images = array();
			$featuredImage = '';
			foreach (new DirectoryIterator($folderUrl) as $fn) {
				if ($fn->getFilename() != "." && $fn->getFilename() != "..") {
					if (is_dir($folderUrl . $fn->getFilename())) {
						foreach (new DirectoryIterator($folderUrl . $fn->getFilename()) as $ffn) {
							$featuredImage = $httpUrl . 'featured/' . $ffn->getFilename();
						}
					} else {
						$images[] = $httpUrl . $fn->getFilename();
					}
				}
			}
			$this->set('imagesList', $images);
		}
		$this->set('categories', $this->Art->Category->find('list', array('fields' => array('Category.id', 'Category.catname'))));
		$this->set('styles', $this->Art->Style->find('list', array('fields' => array('Style.id', 'Style.stylename'))));
		$this->set('colors', $this->Art->Color->find('list', array('fields' => array('Color.id', 'Color.colorname'))));
	}

	public function admin_view($id = null) {
		$this->Art->id = $id;

		if (!$this->Art->exists()) {
			throw new NotFoundException('Invalid art');
		}

		if (!$id) {
			$this->Session->setFlash('Invalid art');
			$this->redirect(array('action' => 'index'));
		}
		$this->set('art', $this->Art->read());
		$folderUrl = WWW_ROOT . "files/ArtImages/" . $id . "/";
		$httpUrl = $this->base . "/files/ArtImages/" . $id . "/";
		$images = array();
		$featuredImage = '';
		foreach (new DirectoryIterator($folderUrl) as $fn) {
			if ($fn->getFilename() != "." && $fn->getFilename() != "..") {
				if (is_dir($folderUrl . $fn->getFilename())) {
					foreach (new DirectoryIterator($folderUrl . $fn->getFilename()) as $ffn) {
						$featuredImage = $httpUrl . 'featured/' . $ffn->getFilename();
					}
				} else {
					$images[] = $httpUrl . $fn->getFilename();
				}
			}
		}
		$this->set('imagesList', $images);
		$this->set('featuredImage', $featuredImage);
	}

	public function admin_delete($id = null) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}

		if (!$id) {
			$this->Session->setFlash('Invalid id for the art');
			$this->redirect(array('action' => 'index'));
		}

		if ($this->Art->delete($id)) {
			$folderUrl = WWW_ROOT . "files/ArtImages/" . $id . "/";
			$this->deleteDir($folderUrl);
			$this->Session->setFlash('Art deleted');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash('Art was not deleted');
		$this->redirect(array('action' => 'index'));
	}

	public function deleteDir($path) {
		$classFunc = array(__CLASS__, __FUNCTION__);
		return is_file($path) ?
				@unlink($path) :
				array_map($classFunc, glob($path . '/*')) == @rmdir($path);
	}

	public function getTotalCartPrice($id = null) {
		$artArray = $this->Session->read('cart');
		$art = array();
		if (count($artArray) > 0) {
			foreach ($artArray as $cartItemKey => $cartItemValue) {
				$art = $this->Art->find('first', array('conditions' => array('Art.id' => $cartItemKey)));
				if ($art != null) {
					$art['Art']['Quantity'] = $cartItemValue;
					$art[] = $art;
				}
			}
		}
		$cartCnt = 0;
		$total = 0;
		foreach ($art as $art):
			$prodCharge = $art['Art']['price'];
			$prodQty = $art['Art']['Quantity'];
			$total += $prodCharge * $prodQty;
			$cartCnt++;
		endforeach;
		return $total;
	}

	public function beforeFilter() {
		parent::beforeFilter();
		$user = $this->Auth->user();
		$this->set('current_user', $user);
		$this->Auth->allow('index');
		$this->Auth->allow('addToCart');
		$this->Auth->allow('updateCart');
		$this->Auth->allow('cart');
		$this->Auth->allow('category');
		$this->Auth->allow('color');
		$this->Auth->allow('style');
		$this->Auth->allow('search');
		$this->Auth->allow('price');
		$this->layout = "default";
	}

	public function view($id = null) {
		$art = $this->Art->find('first', array('conditions' => array('Art.id' => $id)));

		$userart = $this->Art->find('all', array(
			'conditions' => array('NOT' => array('Art.id' => array($id)),
				'Art.author' => $art['Art']['author']),
			'limit' => 4));

		$this->set('art', $art);
		$this->set('userart', $userart);
		$artArray = $this->Session->read('cart');
		$art = array();
		if (count($artArray) > 0) {
			foreach ($artArray as $cartItemKey => $cartItemValue) {
				$art = $this->Art->find('first', array('conditions' => array('Art.id' => $cartItemKey)));
				if ($art != null) {
					$art['Art']['Quantity'] = $cartItemValue;
					$art[] = $art;
				}
			}
		}
		$this->set('cartart', $art);
	}

	public function addToCart($id = null) {
		if ($this->Session->read('cart') == null) {
			$artDict = array();
		} else {
			$artDict = $this->Session->read('cart');
		}

		if ($this->Dictionary->containsKey($artDict, $id)) {
			$prevQty = $this->Dictionary->getItem($artDict, $id);
			$this->Dictionary->removeItem($artDict, $id);
			$this->Dictionary->addItem($artDict, $id, $prevQty + 1);
		} else {
			echo 'new';
			$this->Dictionary->addItem($artDict, $id, 1);
		}

		$this->Session->write('cart', $artDict);
		$this->redirect(array("controller" => "art",
			"action" => "cart"));
	}

	public function updateCart() {
		if ($this->Session->read('cart') == null) {
			$artDict = array();
		} else {
			$artDict = $this->Session->read('cart');
		}
		foreach ($_POST['prodId'] as $key => $prodId) {
			if ($this->Dictionary->containsKey($artDict, $prodId)) {
				$this->Dictionary->removeItem($artDict, $prodId);
				$this->Dictionary->addItem($artDict, $prodId, $_POST['prod_qty'][$key]);
			}
		}
		$this->Session->write('cart', $artDict);

		$artArray = $this->Session->read('cart');

		$art = array();
		if (count($artArray) > 0) {
			foreach ($artArray as $cartItemKey => $cartItemValue) {
				if ($cartItemValue > 0) {
					$art = $this->Art->find('first', array('conditions' => array('Art.id' => $cartItemKey)));
					if ($art != null) {
						$art['Art']['Quantity'] = $cartItemValue;
						$art[] = $art;
					}
				}
			}
		}

		$this->set('art', $art);
		$this->set('cartart', $art);
	}

	public function cart() {
		$artArray = $this->Session->read('cart');
		$art = array();
		if (count($artArray) > 0) {
			foreach ($artArray as $cartItemKey => $cartItemValue) {
				if ($cartItemValue > 0) {
					$art = $this->Art->find('first', array('conditions' => array('Art.id' => $cartItemKey)));
					if ($art != null) {
						$art['Art']['Quantity'] = $cartItemValue;
						$art[] = $art;
					}
				}
			}
		}
		$this->set('art', $art);
		$this->set('cartart', $art);
	}

	function getCarts() {
        $artArray = $this->Session->read('cart');
        $art = array();
        if (count($artArray) > 0) {
            foreach ($artArray as $cartItemKey => $cartItemValue) {
                $art = $this->Art->find('first', array('conditions' => array('Art.id' => $cartItemKey)));
                if ($art != null) {
                    $art['Art']['Quantity'] = $cartItemValue;
                    $art[] = $art;
                }
            }
        }
        $this->set('cartart', $art);	
	}

	public function price($id = '') {
		// Price range array
		$priceRange = array(
			'1' => 'Less than £250',
			'2' => '£250 - £500',
			'3' => '£500 - £1,000',
			'4' => '£1,000 - £2,000',
			'5' => '£2,000 - £10,000',
			'6' => 'More than £10,000'
		);

		if ($this->check_search_array($id, $priceRange) == 1 || $id == '') {
			$this->redirect(Router::url('/', true));
		} else {
			$conditions = array();
			switch ($id) {
				case '1':
					array_push($conditions, array('art.price BETWEEN ? AND ?' => array(0, 250)));
					break;
				case '2':
					array_push($conditions, array('art.price BETWEEN ? AND ?' => array(250, 500)));
					break;
				case '3':
					array_push($conditions, array('art.price BETWEEN ? AND ?' => array(500, 1000)));
					break;
				case '4':
					array_push($conditions, array('art.price BETWEEN ? AND ?' => array(1000, 2000)));
					break;
				case '5':
					array_push($conditions, array('art.price BETWEEN ? AND ?' => array(2000, 10000)));
					break;
				case '6':
					array_push($conditions, array('art.price BETWEEN ? AND ?' => array(10000, 999999)));
					break;
			}

			// Get art
			$art = $this->Art->find('all', array('conditions' => $conditions));
			$this->set('art', $art);

			// Set range for breadcrumb
			$this->set('priceRange', $priceRange[$id]);
		}
	}

	public function search() {
		// Logic for the search function to return results

		$catName = $this->Art->Category->find('list', array('fields' => array('Category.id', 'Category.catname'),
			'conditions' => array('id NOT' => $this->giftCategoryId)));
		$this->set('catname', $catName);

		$colorName = $this->Art->Color->find('list', array('fields' => array('Color.id', 'Color.colorname'),
			'conditions' => array('id NOT' => $this->giftColorid)));
		$this->set('colorname', $colorName);

		$styleName = $this->Art->Style->find('list', array('fields' => array('Style.id', 'Style.stylename'),
			'conditions' => array('id NOT' => $this->giftStyleId)));
		$this->set('stylename', $styleName);

		$priceRange = array(
		'1' => 'Less than £250',
		'2' => '£250 - £500',
		'3' => '£500 - £1,000',
		'4' => '£1,000 - £2,000',
		'5' => '£2,000 - £10,000',
		'6' => 'More than £10,000'
		);
		$this->set('pricerange', $priceRange);

		if ($this->request->is('post')) {
			$error = 0;
			$error += $this->check_search_array($this->request->data['Art']['Category'], $catName);
			$error += $this->check_search_array($this->request->data['Art']['Colour'], $colorName);
			$error += $this->check_search_array($this->request->data['Art']['Style'], $styleName);
			$error += $this->check_search_array($this->request->data['Art']['Price Range'], $priceRange);

			// If error, shout
			if ($error > 0) {
				$this->Session->setFlash("An error occurred with the search!");
			} else {

				$conditions = array();
				if ($this->request->data['Art']['Category']) {
					array_push($conditions, array('category_id' => $this->request->data['Art']['Category']));
				}
				if ($this->request->data['Art']['Colour']) {
					array_push($conditions, array('colorId' => $this->request->data['Art']['Colour']));
				}
				if ($this->request->data['Art']['Style']) {
					array_push($conditions, array('style_id' => $this->request->data['Art']['Style']));
				}
				if ($this->request->data['Art']['Price Range']) {
					switch ($this->request->data['Art']['Price Range']) {
						case '1':
							array_push($conditions, array('art.price BETWEEN ? AND ?' => array(0, 250)));
							break;
						case '2':
							array_push($conditions, array('art.price BETWEEN ? AND ?' => array(250, 500)));
							break;
						case '3':
							array_push($conditions, array('art.price BETWEEN ? AND ?' => array(500, 1000)));
							break;
						case '4':
							array_push($conditions, array('art.price BETWEEN ? AND ?' => array(1000, 2000)));
							break;
						case '5':
							array_push($conditions, array('art.price BETWEEN ? AND ?' => array(2000, 10000)));
							break;
						case '6':
							array_push($conditions, array('art.price BETWEEN ? AND ?' => array(10000, 999999)));
							break;
					}
				}

				// query
				$art = $this->Art->find('all', array('conditions' => $conditions));
				$this->set('search_results', $art);

				// Set these for selected values later
				$this->set('search_cat', $this->request->data['Art']['Category']);
				$this->set('search_color', $this->request->data['Art']['Colour']);
				$this->set('search_style', $this->request->data['Art']['Style']);
				$this->set('search_price', $this->request->data['Art']['Price Range']);
			}
		} else {
			// If there was no post search items should be blank for pre selected values
			$this->set('search_cat', '');
			$this->set('search_color', '');
			$this->set('search_style', '');
			$this->set('search_price', '');
		}
	}

	/* From the search controller above, using the arrays created for inputArray
	   check to see if the key exists, also check to see if none is selected
	   returns 1 to increment error counter
	*/

	public function check_search_array($value, $inputArray) {
		if (array_key_exists($value, $inputArray) || $value == '') {
			return 0;
		} else {
			return 1;
		}
	}
}