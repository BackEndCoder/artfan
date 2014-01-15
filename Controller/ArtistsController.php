<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ArtistsController
 *
 * @author Wilson<mailwilson007@gmail.com>
 */
App::uses('UsersController', 'Controller');
App::uses('ProductsController', 'Controller');

class ArtistsController extends AppController {

    public $name = 'Artists';
    public $uses = array();
    public $components = array('Auth');
    public $helpers = array('Text');

    public function beforeFilter() {
        parent::beforeFilter();
        $user = $this->Auth->user();
        $this->set('current_user', $user);
        $this->Auth->allow('profile');
        $this->Auth->allow('lists');

    }
    public function profile($username = '') {
        $userCtrl = new UsersController();
        $userCtrl->constructClasses();

        $user = $userCtrl->User->find('first', array('conditions' => array('User.username' => $username)));
        $this->set('user', $user);

        $productCtrl = new ProductsController();
        $productCtrl->constructClasses();

        $products = $productCtrl->Product->find('all', array('conditions' => array('Product.author' => $user['User']['id'])));
        $this->set('products', $products);

        //$http_url = $this->base . "/files/ProfileImages/" . $this->Auth->user('id') . "/";
        $http_url = $this->base . "/files/ProfileImages/" . $user['User']['id'] . "/";
        $images = '';
       // $folder_url = WWW_ROOT . "files/ProfileImages/" . $this->Auth->user('id') . "/";
        $folder_url = WWW_ROOT . "files/ProfileImages/" . $user['User']['id'] . "/";
        if (file_exists($folder_url)) {
            foreach (new DirectoryIterator($folder_url) as $fn) {
                $images = $http_url . $fn->getFilename();
            }
        }
        $this->set('profileimage', $images);
    }

    public function lists() {
        $artistsCtrl = new UsersController();
        $artistsCtrl->constructClasses();
        $this->set('artists', $artistsCtrl->User->find('all', array('conditions' => array('User.role_id' => 2))));
    }

}

?>
