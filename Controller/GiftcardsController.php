<?php

App::uses('ProductsController', 'Controller');

class GiftcardsController extends AppController {
    public $components = array('Session', 'Auth');
    public $uses = false; // No table

    // These are the ids that only giftcards should have!
    public $category_gift_id = 11;
    public $color_gift_id = 12;
    public $style_gift_id = 11;

    public function beforeFilter() {
        parent::beforeFilter();
        $user = $this->Auth->user();
        $this->set('current_user', $user);
        $this->Auth->allow('index');
        $this->layout = "default";
    }

    public function index(){
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
        $productsCtrl = new ProductsController();
        $productsCtrl->constructClasses();
        $this->set('giftcard', $productsCtrl->Product->find('all',
            array('conditions' => array('Product.category_id' => $this->category_gift_id,
                'Product.color_id' => $this->color_gift_id,
                'Product.style_id' => $this->style_gift_id))));
    }
}
?>