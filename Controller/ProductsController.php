<?php
App::uses('AppController', 'Controller');
App::uses('CategoriesController', 'Controller');
App::uses('StylesController', 'Controller');
App::uses('ColorsController', 'Controller');
class ProductsController extends AppController {

	public $name = 'Products';

	public $helpers = array('Html', 'Form', 'Text');

	public $GiftCategoryId = 11;

	public $GiftColorId = 12;

	public $GiftStyleId = 11;

	public function all() {
		// For getting ids of giftcard items
		$this->paginate = array(
			'limit' => 20,
			'order' => array('Product.id' => 'asc'),
			// All other than below IDs that represent giftcards
			'conditions' => array('Product.category_id NOT' => $this->category_gift_id,
			'Product.color_id NOT' => $this->color_gift_id,
			'Product.style_id NOT' => $this->style_gift_id)
		);
		$products = $this->paginate('Product');
		$this->set('products', $products);
		$this->layout = "default";
	}

	public function index() {
		$user = $this->Auth->user();
		if ($user['role_id'] == 1) {
			$this->paginate = array(
				'limit' => 10,
				'order' => array('Product.id' => 'asc'),
				'conditions' => array('Product.category_id NOT' => $this->category_gift_id,
					'Product.color_id NOT' => $this->color_gift_id,
					'Product.style_id NOT' => $this->style_gift_id
					)
				);
			$products = $this->paginate('Product');
		} else {
			$this->paginate = array(
				'limit' => 10,
				'conditions' => array(
					'Product.author' => $user['id'],
					'Product.category_id NOT' => $this->GiftCategoryId,
					'Product.color_id NOT' => $this->GiftColorId,
					'Product.style_id NOT' => $this->StyleGiftId
					),
				'order' => array('Product.id' => 'asc')
				);
			$products = $this->paginate('Product');
		}

		$this->set('products', $products);
	}

	public function add() {
		$user = $this->Auth->user();

		if ($user['role_id'] == 1) {
			$categories = $this->Product->Category->find('list', array('fields' => array('Category.id', 'Category.catname')));
			$styles = $this->Product->Style->find('list', array('fields' => array('Style.id', 'Style.stylename')));
			$colors = $this->Product->Color->find('list', array('fields' => array('Color.id', 'Color.colorname')));
		} else {
			$categories = $this->Product->Category->find('list', array('fields' => array('Category.id', 'Category.catname'),
				'conditions' => array('id NOT' => $this->category_gift_id)));
			$styles = $this->Product->Style->find('list', array('fields' => array('Style.id', 'Style.stylename'),
				'conditions' => array('id NOT' => $this->style_gift_id)));
			$colors = $this->Product->Color->find('list', array('fields' => array('Color.id', 'Color.colorname'),
				'conditions' => array('id NOT' => $this->color_gift_id)));
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
			else{
				$this->Session->setFlash('The product could not be saved. Please, try again.');
			}
		}
	}

	public function validateProductImg() {
		return false;
	}

	public function edit($id = null) {
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

	public function view($id = null) {
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

	public function delete($id = null) {
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

	public function giftcard_index() {
		// If user is logged in and there is a post /put request add to card
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Auth->loggedIn()) {
				// redirect to page to add to cart
				$id = $this->request->data['giftcard'];
				$this->redirect(array('controller' => 'ProductDetails',
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
}