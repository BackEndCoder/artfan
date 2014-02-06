<?php
App::uses('AppController', 'Controller');
App::uses('ProductsController', 'Controller');
App::uses('CategoriesController', 'Controller');
App::uses('ColorsController', 'Controller');
App::uses('StylesController', 'Controller');
App::uses('SlidersController', 'Controller');
App::uses('UsersController', 'Controller');
App::uses('GiftcardsController', 'Controller');
class PagesController extends AppController {
    public $name = 'Pages';
    public $helpers = array('Html');

    public function beforeFilter() {
        parent::beforeFilter();
        $user = $this->Auth->user();
        $this->set('current_user', $user);
        $this->Auth->allow('display');
        $this->Auth->allow('show');
        $this->layout = "admin";
    }

    public function display() {
        $path = func_get_args();

        $count = count($path);
        if (!$count) {
            $this->redirect('/');
        }
        $page = $subpage = $title_for_layout = null;

        if (!empty($path[0])) {
            $page = $path[0];
        }
        if (!empty($path[1])) {
            $subpage = $path[1];
        }
        if (!empty($path[$count - 1])) {
            $title_for_layout = Inflector::humanize($path[$count - 1]);
        }

        // get the Products
        $this->getProducts();

        //get the banner slider
        $this->getSliders();

        //get artists
        $this->getArtists();

        //get new artists
        $this->getNewArtists();
		
		$this->getCarts();

        $this->layout = "default";
        $this->set(compact('page', 'subpage', 'title_for_layout'));
        $this->render(implode('/', $path));
    }

    public function add() {
        if ($this->request->is('post')) {
            if ($this->Page->save($this->data)) {
                $this->redirect(array('action' => 'index'));
                $this->Session->setFlash("The page has been saved");
            } else {
                $this->Session->setFlash('The page could not be saved. Please, try again.');
            }
        }
    }

    public function edit($id = null) {
        $this->Page->id = $id;
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Page->save($this->request->data)) {
                $this->Session->setFlash('The product has been saved');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('The product could not be saved. Please, try again.');
            }
        } else {
            $this->request->data = $this->Page->read();
        }
    }

    public function view($id = null) {
        $this->Page->id = $id;

        if (!$this->Page->exists()) {
            throw new NotFoundException('Invalid Page');
        }

        if (!$id) {
            $this->Session->setFlash('Invalid Page');
            $this->redirect(array('action' => 'index'));
        }
        $this->set('page', $this->Page->read());
    }

    public function show($id = null) {
        $this->Page->id = $id;

        if (!$this->Page->exists()) {
            throw new NotFoundException('Invalid Page');
        }

        if (!$id) {
            $this->Session->setFlash('Invalid Page');
            $this->redirect(array('action' => 'index'));
        }
        $this->set('page', $this->Page->read());
        $this->layout = "default";
    }
	
    public function getPerfectGift() {
        return $this->Page->getPerfectGift();
    }

	function getCarts() {
        $productsCtrl = new ProductsController();
        $productsCtrl->constructClasses();
        $productArray = $this->Session->read('cart');
        $products = array();
        if (count($productArray) > 0) {
            foreach ($productArray as $cartItemKey => $cartItemValue) {
                $product = $productsCtrl->Product->find('first', array('conditions' => array('Product.id' => $cartItemKey)));
                if ($product != null) {
                    $product['Product']['Quantity'] = $cartItemValue;
                    $products[] = $product;
                }
            }
        }
        $this->set('cartproducts', $products);	
	}

    function getProducts() {
        $gc = new GiftcardsController();
        $productsCtrl = new ProductsController();
        $productsCtrl->constructClasses();
        $products = $productsCtrl->Product->find('all',
            array('conditions' => array('Product.category_id NOT' => $gc->category_gift_id,
                'Product.color_id NOT' => $gc->color_gift_id,
                'Product.style_id NOT' => $gc->style_gift_id),
                'limit' => 8,
                'order' => array('Product.id DESC')));

        $this->set('products', $products);
    }

    function getSliders() {
        $slidersCtrl = new SlidersController();
        $slidersCtrl->constructClasses();
        $sliders = $slidersCtrl->Slider->find('all');
        $this->set('sliders', $sliders);
    }

    function getArtists() {
        $artistsCtrl = new UsersController();
        $artistsCtrl->constructClasses();
        $artists = $artistsCtrl->User->find('all', array('conditions' => array('User.role_id' => 2)));
        $this->set('artists', $artists);
    }

    function getNewArtists() {
        $artistsCtrl = new UsersController();
        $artistsCtrl->constructClasses();
        $new_artists = $artistsCtrl->User->find('all', array('conditions' => array('User.role_id' => 2), 'order' => array('User.id DESC')));
        $this->set('new_artists', $new_artists);
    }
}
