<?php
class GiftcardsController extends AppController {

	public $name = 'Giftcards';

	public $helpers = array('Html', 'Form', 'Text');

	public function admin_index() {
		$user = $this->Auth->user();
		if ($user['role_id'] == 1) {
			$this->paginate = array(
				'limit' => 10,
				'order' => array('Giftcard.id' => 'asc'),
				'conditions' => array('Giftcard.category_id NOT' => $this->giftCategoryId,
					'Giftcard.color_id NOT' => $this->giftColorId,
					'Giftcard.style_id NOT' => $this->giftStyleId
					)
				);
			$giftcards = $this->paginate('Giftcard');
		} else {
			$this->paginate = array(
				'limit' => 10,
				'conditions' => array(
					'Giftcard.author' => $user['id'],
					'Giftcard.category_id NOT' => $this->giftCategoryId,
					'Giftcard.color_id NOT' => $this->giftColorId,
					'Giftcard.style_id NOT' => $this->giftStyleId
					),
				'order' => array('Giftcard.id' => 'asc')
				);
			$giftcards = $this->paginate('Giftcard');
		}

		$this->set('giftcards', $giftcards);
	}

	public function admin_add() {
		$user = $this->Auth->user();

		if ($user['role_id'] == 1) {
			$categories = $this->Giftcard->Category->find('list', array('fields' => array('Category.id', 'Category.catname')));
			$styles = $this->Giftcard->Style->find('list', array('fields' => array('Style.id', 'Style.stylename')));
			$colors = $this->Giftcard->Color->find('list', array('fields' => array('Color.id', 'Color.colorname')));
		} else {
			$categories = $this->Giftcard->Category->find('list', array('fields' => array('Category.id', 'Category.catname'),
				'conditions' => array('id NOT' => $this->giftCategoryId)));
			$styles = $this->Giftcard->Style->find('list', array('fields' => array('Style.id', 'Style.stylename'),
				'conditions' => array('id NOT' => $this->giftStyleId)));
			$colors = $this->Giftcard->Color->find('list', array('fields' => array('Color.id', 'Color.colorname'),
				'conditions' => array('id NOT' => $this->giftColorId)));
		}
		$this->set('categories', $categories);
		$this->set('styles', $styles);
		$this->set('colors', $colors);

		$user = $this->Auth->user();
		if ($this->request->is('post')) {
			$IsImgValid = $this->validateGiftcardImg();
			if ($this->Giftcard->save($this->data)) {
				$InsertId = $this->Giftcard->id;
				$folderUrl = WWW_ROOT . "files/GiftcardImages/" . $InsertId . "/";
				if (is_dir($folderUrl) != 1) {
					mkdir($folderUrl);
				}
				$image = $this->data['Giftcard']['myimage'];
				foreach ($image as $item) {
					move_uploaded_file($item['tmp_name'], $folderUrl . $item['name']);
				}
				$this->redirect(array('action' => 'index'));
				$this->Session->setFlash("The giftcard has been saved");
			}
			else {
				$this->Session->setFlash('The giftcard could not be saved. Please, try again.');
			}
		}
	}

	public function validateGiftcardImg() {
		return false;
	}

	public function admin_edit($id = null) {
		$this->Giftcard->id = $id;

		if (!$this->Giftcard->exists()) {
			throw new NotFoundException('Invalid Giftcard');
		}

		$folderUrl = WWW_ROOT . "files/GiftcardImages/" . $id . "/";

		if ($this->request->is('post') || $this->request->is('put')) {
			$deletedImages = $this->data['deletedImages'];
			if (!empty($deletedImages)) {
				$deletedImagesArr = split(',', $deletedImages);
				foreach ($deletedImagesArr as $image) {
					$imageName = split('/', $image);
					unlink($folderUrl . $imageName[count($imageName) - 1]);
				}
			}
			$image = $this->data['Giftcard']['myimage'];
			foreach ($image as $item) {
				move_uploaded_file($item['tmp_name'], $folderUrl . $item['name']);
			}

			if ($this->Giftcard->save($this->request->data)) {
				$this->Session->setFlash('The giftcard has been saved');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The giftcard could not be saved. Please, try again.');
			}
		} else {
			$this->request->data = $this->Giftcard->read();
			$httpUrl = $this->base . "/files/GiftcardImages/" . $id . "/";
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
		$this->set('categories', $this->Giftcard->Category->find('list', array('fields' => array('Category.id', 'Category.catname'))));
		$this->set('styles', $this->Giftcard->Style->find('list', array('fields' => array('Style.id', 'Style.stylename'))));
		$this->set('colors', $this->Giftcard->Color->find('list', array('fields' => array('Color.id', 'Color.colorname'))));
	}

	public function admin_view($id = null) {
		$this->Giftcard->id = $id;

		if (!$this->Giftcard->exists()) {
			throw new NotFoundException('Invalid giftcard');
		}

		if (!$id) {
			$this->Session->setFlash('Invalid giftcard');
			$this->redirect(array('action' => 'index'));
		}
		$this->set('giftcard', $this->Giftcard->read());
		$folderUrl = WWW_ROOT . "files/GiftcardImages/" . $id . "/";
		$httpUrl = $this->base . "/files/GiftcardImages/" . $id . "/";
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
			$this->Session->setFlash('Invalid id for the giftcard');
			$this->redirect(array('action' => 'index'));
		}

		if ($this->Giftcard->delete($id)) {
			$folderUrl = WWW_ROOT . "files/GiftcardImages/" . $id . "/";
			$this->deleteDir($folderUrl);
			$this->Session->setFlash('Giftcard deleted');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash('Giftcard was not deleted');
		$this->redirect(array('action' => 'index'));
	}

	public function deleteDir($path) {
		$classFunc = array(__CLASS__, __FUNCTION__);
		return is_file($path) ?
				@unlink($path) :
				array_map($classFunc, glob($path . '/*')) == @rmdir($path);
	}

	public function index() {
		// If user is logged in and there is a post /put request add to card
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Auth->loggedIn()) {
				// redirect to page to add to cart
				$id = $this->request->data['giftcard'];
				$this->redirect(array('controller' => 'giftcards',
					'action' => 'addToCart/' . $id));
				// redirect to register/login if not logged in
			} else {
				$this->redirect(array('controller' => 'Users', 'action' => 'login'));
			}
		}

		// List only giftcarded items (color, cat and style all must be giftcard)
		$this->set('giftcards', $this->Giftcard->getGiftCardList());
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

	public function getGiftcards() {
		return $this->Giftcard->getGiftcards();
	}
}