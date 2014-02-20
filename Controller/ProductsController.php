<?php

App::uses('AppController', 'Controller');
App::uses('CategoriesController', 'Controller');
App::uses('StylesController', 'Controller');
App::uses('ColorsController', 'Controller');

class ProductsController extends AppController {

    public $name = 'Products';
    public $helpers = array('Html', 'Form', 'Text');
    // These are the ids that only giftcards should have!
    public $category_gift_id = 11;
    public $color_gift_id = 12;
    public $style_gift_id = 11;

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
        $this->layout= "default";
    }

    public function index() {
        // For getting ids of giftcard items
        //$gc = new GiftCardsController();

        $user = $this->Auth->user();
        if ($user['role_id'] == 1) {
            $this->paginate = array(
                'limit' => 10,
                'order' => array('Product.id' => 'asc')/*,
                'conditions' => array('Product.category_id NOT' => $gc->category_gift_id,
                    'Product.color_id NOT' => $gc->color_gift_id,
                    'Product.style_id NOT' => $gc->style_gift_id)*/
            );
            $products = $this->paginate('Product');
        } else {
             $this->paginate = array(
                'limit' => 10,
                'conditions' => array(
                    'Product.author' => $user['id']/*,
                    'Product.category_id NOT' => $gc->category_gift_id,
                    'Product.color_id NOT' => $gc->color_gift_id,
                    'Product.style_id NOT' => $gc->style_gift_id*/
                ),
                'order' => array('Product.id' => 'asc')
            );
            $products = $this->paginate('Product');
        }

        $this->set('products', $products);
    }

    public function add() {
        // Get giftcard controller, need to check to see if it should be populated in add menu
        //$gc = new GiftcardsController();

        // get current user
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

			$is_img_valid = $this->validateProductImg();
			if ($this->Product->save($this->data)) {
                $insert_id = $this->Product->id;
                $folder_url = WWW_ROOT . "files/ProductImages/" . $insert_id . "/";
                if (is_dir($folder_url) != 1) {
                    mkdir($folder_url);
                }
                $image = $this->data['Product']['myimage'];
                foreach ($image as $item) {
                    move_uploaded_file($item['tmp_name'], $folder_url . $item['name']);
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

    public function edit($id = null) {
        $cat = new CategoriesController();
        $cat->constructClasses();
        $categories = $cat->Category->find('list', array('fields' => array('Category.id', 'Category.catname')));

        $this->set('categories', $categories);

        $styleCtrl = new StylesController();
        $styleCtrl->constructClasses();
        $styles = $styleCtrl->Style->find('list', array('fields' => array('Style.id', 'Style.stylename')));
        $this->set('styles', $styles);

        $colorCtrl = new ColorsController();
        $colorCtrl->constructClasses();
        $colors = $colorCtrl->Color->find('list', array('fields' => array('Color.id', 'Color.colorname')));
        $this->set('colors', $colors);

        $this->Product->id = $id;

        if (!$this->Product->exists()) {
            throw new NotFoundException('Invalid Product');
        }

        $folder_url = WWW_ROOT . "files/ProductImages/" . $id . "/";

        if ($this->request->is('post') || $this->request->is('put')) {
            $deletedImages = $this->data['deletedImages'];
            if (!empty($deletedImages)) {
                $deletedImages_arr = split(',', $deletedImages);
                foreach ($deletedImages_arr as $image) {
                    $image_name = split('/', $image);
                    unlink($folder_url . $image_name[count($image_name) - 1]);
                }
            }
            $image = $this->data['Product']['myimage'];
            foreach ($image as $item) {
                move_uploaded_file($item['tmp_name'], $folder_url . $item['name']);
            }

            if ($this->Product->save($this->request->data)) {
                $this->Session->setFlash('The product has been saved');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('The product could not be saved. Please, try again.');
            }
        } else {
            $this->request->data = $this->Product->read();
            $http_url = $this->base . "/files/ProductImages/" . $id . "/";
            $images = array();
            $featuredImage = '';
            foreach (new DirectoryIterator($folder_url) as $fn) {
                if ($fn->getFilename() != "." && $fn->getFilename() != "..") {
                    if (is_dir($folder_url . $fn->getFilename())) {
                        foreach (new DirectoryIterator($folder_url . $fn->getFilename()) as $ffn) {
                            $featuredImage = $http_url . 'featured/' . $ffn->getFilename();
                        }
                    } else {
                        $images[] = $http_url . $fn->getFilename();
                    }
                }
            }
            $this->set('imagesList', $images);
        }
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
        $folder_url = WWW_ROOT . "files/ProductImages/" . $id . "/";
        $http_url = $this->base . "/files/ProductImages/" . $id . "/";
        $images = array();
        $featuredImage = '';
        foreach (new DirectoryIterator($folder_url) as $fn) {
            if ($fn->getFilename() != "." && $fn->getFilename() != "..") {
                if (is_dir($folder_url . $fn->getFilename())) {
                    foreach (new DirectoryIterator($folder_url . $fn->getFilename()) as $ffn) {
                        $featuredImage = $http_url . 'featured/' . $ffn->getFilename();
                    }
                } else {
                    $images[] = $http_url . $fn->getFilename();
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
            $folder_url = WWW_ROOT . "files/ProductImages/" . $id . "/";
            $this->deleteDir($folder_url);
            $this->Session->setFlash('Product deleted');
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash('Product was not deleted');
        $this->redirect(array('action' => 'index'));
    }

    function deleteDir($path) {
        $class_func = array(__CLASS__, __FUNCTION__);
        return is_file($path) ?
                @unlink($path) :
                array_map($class_func, glob($path . '/*')) == @rmdir($path);
    }

    public function giftcard_index(){
        // If user is logged in and there is a post /put request add to card
        if ($this->request->is('post') || $this->request->is('put')){
            if ($this->Auth->loggedIn()){
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

    function getProducts() {
        return $this->Product->getProducts();
    }
}