<?php
class ProductsController extends AppController {

	public $name = 'Products';

	public $helpers = array('Html', 'Form', 'Text');

	public $giftCategoryId = 11;

	public $giftColorId = 12;

	public $giftStyleId = 11;

	public function index() {
		foreach ($this->request->params as $k => $v):
        	$$k = $v;
        endforeach;
        foreach ($this->request->query as $k => $v):
        	$$k = $v;
        endforeach;
		$options = array(
			'limit' => 20,
			'order' => array('Product.id' => 'asc'),
			'conditions' => array(array('Product.category_id NOT' => $this->giftCategoryId,
			'Product.color_id NOT' => $this->giftColorId,
			'Product.style_id NOT' => $this->giftStyleId
			)));
		if(!empty($category)){
			$this->set('catname', $this->Product->Category->getCategoryName($category));
			$options['conditions'][0]['Product.category_id'] = $category;
		}
		if(!empty($color)){
			$this->set('colorname', $this->Product->Color->getColorName($color));
			$options['conditions'][0]['Product.color_id'] = $color;
		}
		if(!empty($style)){
			$this->set('stylename', $this->Product->Style->getStyleName($style));
			$options['conditions'][0]['Product.style_id'] = $style;
		}
		$this->paginate = $options;
		$products = $this->paginate('Product');
		$this->set('products', $products);
		$this->layout = "default";
	}

	public function admin_index() {
		$user = $this->Auth->user();
		if ($user['role_id'] == 1) {
			$this->paginate = array(
				'limit' => 10,
				'order' => array('Product.id' => 'asc'),
				'conditions' => array('Product.category_id NOT' => $this->giftCategoryId,
					'Product.color_id NOT' => $this->giftColorId,
					'Product.style_id NOT' => $this->giftStyleId
					)
				);
			$products = $this->paginate('Product');
		} else {
			$this->paginate = array(
				'limit' => 10,
				'conditions' => array(
					'Product.author' => $user['id'],
					'Product.category_id NOT' => $this->giftCategoryId,
					'Product.color_id NOT' => $this->giftColorId,
					'Product.style_id NOT' => $this->giftStyleId
					),
				'order' => array('Product.id' => 'asc')
				);
			$products = $this->paginate('Product');
		}

		$this->set('products', $products);
	}

	public function admin_add() {
		$user = $this->Auth->user();

		if ($user['role_id'] == 1) {
			$categories = $this->Product->Category->find('list', array('fields' => array('Category.id', 'Category.catname')));
			$styles = $this->Product->Style->find('list', array('fields' => array('Style.id', 'Style.stylename')));
			$colors = $this->Product->Color->find('list', array('fields' => array('Color.id', 'Color.colorname')));
		} else {
			$categories = $this->Product->Category->find('list', array('fields' => array('Category.id', 'Category.catname'),
				'conditions' => array('id NOT' => $this->giftCategoryId)));
			$styles = $this->Product->Style->find('list', array('fields' => array('Style.id', 'Style.stylename'),
				'conditions' => array('id NOT' => $this->giftStyleId)));
			$colors = $this->Product->Color->find('list', array('fields' => array('Color.id', 'Color.colorname'),
				'conditions' => array('id NOT' => $this->giftColorId)));
		}
		$this->set('categories', $categories);
		$this->set('styles', $styles);
		$this->set('colors', $colors);

		$user = $this->Auth->user();
		if ($this->request->is('post')) {
			$IsImgValid = $this->validateProductImg();
			if ($this->Product->save($this->data)) {
				$InsertId = $this->Product->id;
				$folderUrl = WWW_ROOT . "files/ProductImages/" . $InsertId . "/";
				if (is_dir($folderUrl) != 1) {
					mkdir($folderUrl);
				}
				$image = $this->data['Product']['myimage'];
				foreach ($image as $item) {
					move_uploaded_file($item['tmp_name'], $folderUrl . $item['name']);
				}
				$this->redirect(array('action' => 'index'));
				$this->Session->setFlash("The product has been saved");
			}
			else {
				$this->Session->setFlash('The product could not be saved. Please, try again.');
			}
		}
	}

	public function validateProductImg() {
		return false;
	}

	public function admin_edit($id = null) {
		$this->Product->id = $id;

		if (!$this->Product->exists()) {
			throw new NotFoundException('Invalid Product');
		}

		$folderUrl = WWW_ROOT . "files/ProductImages/" . $id . "/";

		if ($this->request->is('post') || $this->request->is('put')) {
			$deletedImages = $this->data['deletedImages'];
			if (!empty($deletedImages)) {
				$deletedImagesArr = split(',', $deletedImages);
				foreach ($deletedImagesArr as $image) {
					$imageName = split('/', $image);
					unlink($folderUrl . $imageName[count($imageName) - 1]);
				}
			}
			$image = $this->data['Product']['myimage'];
			foreach ($image as $item) {
				move_uploaded_file($item['tmp_name'], $folderUrl . $item['name']);
			}

			if ($this->Product->save($this->request->data)) {
				$this->Session->setFlash('The product has been saved');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The product could not be saved. Please, try again.');
			}
		} else {
			$this->request->data = $this->Product->read();
			$httpUrl = $this->base . "/files/ProductImages/" . $id . "/";
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
		$this->set('categories', $this->Product->Category->find('list', array('fields' => array('Category.id', 'Category.catname'))));
		$this->set('styles', $this->Product->Style->find('list', array('fields' => array('Style.id', 'Style.stylename'))));
		$this->set('colors', $this->Product->Color->find('list', array('fields' => array('Color.id', 'Color.colorname'))));
	}

	public function admin_view($id = null) {
		$this->Product->id = $id;

		if (!$this->Product->exists()) {
			throw new NotFoundException('Invalid product');
		}

		if (!$id) {
			$this->Session->setFlash('Invalid product');
			$this->redirect(array('action' => 'index'));
		}
		$this->set('product', $this->Product->read());
		$folderUrl = WWW_ROOT . "files/ProductImages/" . $id . "/";
		$httpUrl = $this->base . "/files/ProductImages/" . $id . "/";
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
			$this->Session->setFlash('Invalid id for the product');
			$this->redirect(array('action' => 'index'));
		}

		if ($this->Product->delete($id)) {
			$folderUrl = WWW_ROOT . "files/ProductImages/" . $id . "/";
			$this->deleteDir($folderUrl);
			$this->Session->setFlash('Product deleted');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash('Product was not deleted');
		$this->redirect(array('action' => 'index'));
	}

	public function deleteDir($path) {
		$classFunc = array(__CLASS__, __FUNCTION__);
		return is_file($path) ?
				@unlink($path) :
				array_map($classFunc, glob($path . '/*')) == @rmdir($path);
	}


///GIFTCARD


	public function giftcards() {
		// If user is logged in and there is a post /put request add to card
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Auth->loggedIn()) {
				// redirect to page to add to cart
				$id = $this->request->data['giftcard'];
				$this->redirect(array('controller' => 'products',
					'action' => 'addToCart/' . $id));
				// redirect to register/login if not logged in
			} else {
				$this->redirect(array('controller' => 'Users', 'action' => 'login'));
			}
		}

		// List only giftcarded items (color, cat and style all must be giftcard)
		$this->set('giftcard', $this->Product->getGiftCards());
	}

	public function getProducts() {
		return $this->Product->getProducts();
	}

///GIFTCARD


	public function getTotalCartPrice($id = null) {
		$productArray = $this->Session->read('cart');
		$products = array();
		if (count($productArray) > 0) {
			foreach ($productArray as $cartItemKey => $cartItemValue) {
				$product = $this->Product->find('first', array('conditions' => array('Product.id' => $cartItemKey)));
				if ($product != null) {
					$product['Product']['Quantity'] = $cartItemValue;
					$products[] = $product;
				}
			}
		}
		$cartCnt = 0;
		$total = 0;
		foreach ($products as $product):
			$prodCharge = $product['Product']['price'];
			$prodQty = $product['Product']['Quantity'];
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
		$product = $this->Product->find('first', array('conditions' => array('Product.id' => $id)));

		$userproducts = $this->Product->find('all', array(
			'conditions' => array('NOT' => array('Product.id' => array($id)),
				'Product.author' => $product['Product']['author']),
			'limit' => 4));

		$this->set('product', $product);
		$this->set('userproducts', $userproducts);
		$productArray = $this->Session->read('cart');
		$products = array();
		if (count($productArray) > 0) {
			foreach ($productArray as $cartItemKey => $cartItemValue) {
				$product = $this->Product->find('first', array('conditions' => array('Product.id' => $cartItemKey)));
				if ($product != null) {
					$product['Product']['Quantity'] = $cartItemValue;
					$products[] = $product;
				}
			}
		}
		$this->set('cartproducts', $products);
	}

	public function addToCart($id = null) {
		if ($this->Session->read('cart') == null) {
			$productDict = array();
		} else {
			$productDict = $this->Session->read('cart');
		}

		if ($this->Dictionary->containsKey($productDict, $id)) {
			$prevQty = $this->Dictionary->getItem($productDict, $id);
			$this->Dictionary->removeItem($productDict, $id);
			$this->Dictionary->addItem($productDict, $id, $prevQty + 1);
		} else {
			echo 'new';
			$this->Dictionary->addItem($productDict, $id, 1);
		}

		$this->Session->write('cart', $productDict);
		$this->redirect(array("controller" => "products",
			"action" => "cart"));
	}

	public function updateCart() {
		if ($this->Session->read('cart') == null) {
			$productDict = array();
		} else {
			$productDict = $this->Session->read('cart');
		}
		foreach ($_POST['prodId'] as $key => $prodId) {
			if ($this->Dictionary->containsKey($productDict, $prodId)) {
				$this->Dictionary->removeItem($productDict, $prodId);
				$this->Dictionary->addItem($productDict, $prodId, $_POST['prod_qty'][$key]);
			}
		}
		$this->Session->write('cart', $productDict);

		$productArray = $this->Session->read('cart');

		$products = array();
		if (count($productArray) > 0) {
			foreach ($productArray as $cartItemKey => $cartItemValue) {
				if ($cartItemValue > 0) {
					$product = $this->Product->find('first', array('conditions' => array('Product.id' => $cartItemKey)));
					if ($product != null) {
						$product['Product']['Quantity'] = $cartItemValue;
						$products[] = $product;
					}
				}
			}
		}

		$this->set('products', $products);
		$this->set('cartproducts', $products);
	}

	public function cart() {
		$productArray = $this->Session->read('cart');
		$products = array();
		if (count($productArray) > 0) {
			foreach ($productArray as $cartItemKey => $cartItemValue) {
				if ($cartItemValue > 0) {
					$product = $this->Product->find('first', array('conditions' => array('Product.id' => $cartItemKey)));
					if ($product != null) {
						$product['Product']['Quantity'] = $cartItemValue;
						$products[] = $product;
					}
				}
			}
		}
		$this->set('products', $products);
		$this->set('cartproducts', $products);
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
					array_push($conditions, array('product.price BETWEEN ? AND ?' => array(0, 250)));
					break;
				case '2':
					array_push($conditions, array('product.price BETWEEN ? AND ?' => array(250, 500)));
					break;
				case '3':
					array_push($conditions, array('product.price BETWEEN ? AND ?' => array(500, 1000)));
					break;
				case '4':
					array_push($conditions, array('product.price BETWEEN ? AND ?' => array(1000, 2000)));
					break;
				case '5':
					array_push($conditions, array('product.price BETWEEN ? AND ?' => array(2000, 10000)));
					break;
				case '6':
					array_push($conditions, array('product.price BETWEEN ? AND ?' => array(10000, 999999)));
					break;
			}

			// Get products
			$products = $this->Product->find('all', array('conditions' => $conditions));
			$this->set('products', $products);

			// Set range for breadcrumb
			$this->set('priceRange', $priceRange[$id]);
		}
	}

	public function search() {
		// Logic for the search function to return results

		$catName = $this->Product->Category->find('list', array('fields' => array('Category.id', 'Category.catname'),
			'conditions' => array('id NOT' => $this->giftCategoryId)));
		$this->set('catname', $catName);

		$colorName = $this->Product->Color->find('list', array('fields' => array('Color.id', 'Color.colorname'),
			'conditions' => array('id NOT' => $this->giftColorid)));
		$this->set('colorname', $colorName);

		$styleName = $this->Product->Style->find('list', array('fields' => array('Style.id', 'Style.stylename'),
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
			$error += $this->check_search_array($this->request->data['Product']['Category'], $catName);
			$error += $this->check_search_array($this->request->data['Product']['Colour'], $colorName);
			$error += $this->check_search_array($this->request->data['Product']['Style'], $styleName);
			$error += $this->check_search_array($this->request->data['Product']['Price Range'], $priceRange);

			// If error, shout
			if ($error > 0) {
				$this->Session->setFlash("An error occurred with the search!");
			} else {

				$conditions = array();
				if ($this->request->data['Product']['Category']) {
					array_push($conditions, array('category_id' => $this->request->data['Product']['Category']));
				}
				if ($this->request->data['Product']['Colour']) {
					array_push($conditions, array('colorId' => $this->request->data['Product']['Colour']));
				}
				if ($this->request->data['Product']['Style']) {
					array_push($conditions, array('style_id' => $this->request->data['Product']['Style']));
				}
				if ($this->request->data['Product']['Price Range']) {
					switch ($this->request->data['Product']['Price Range']) {
						case '1':
							array_push($conditions, array('product.price BETWEEN ? AND ?' => array(0, 250)));
							break;
						case '2':
							array_push($conditions, array('product.price BETWEEN ? AND ?' => array(250, 500)));
							break;
						case '3':
							array_push($conditions, array('product.price BETWEEN ? AND ?' => array(500, 1000)));
							break;
						case '4':
							array_push($conditions, array('product.price BETWEEN ? AND ?' => array(1000, 2000)));
							break;
						case '5':
							array_push($conditions, array('product.price BETWEEN ? AND ?' => array(2000, 10000)));
							break;
						case '6':
							array_push($conditions, array('product.price BETWEEN ? AND ?' => array(10000, 999999)));
							break;
					}
				}

				// query
				$products = $this->Product->find('all', array('conditions' => $conditions));
				$this->set('search_results', $products);

				// Set these for selected values later
				$this->set('search_cat', $this->request->data['Product']['Category']);
				$this->set('search_color', $this->request->data['Product']['Colour']);
				$this->set('search_style', $this->request->data['Product']['Style']);
				$this->set('search_price', $this->request->data['Product']['Price Range']);
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