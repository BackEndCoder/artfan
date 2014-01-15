<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of WishlistsController
 *
 * @author Wilson<mailwilson007@gmail.com>
 */

class WishlistsController extends AppController {

    public $name = "Wishlists";
    public $components = array(
        'Session',
        'Auth' => array(
            //'loginAction' => array('controller' => 'Users', 'action' => 'login'), 
            'loginRedirect' => array('controller' => 'Pages', 'action' => 'display'),
            'logoutRedirect' => array('controller' => 'Pages', 'action' => 'index'),
            'authError' => 'Did you really think you are allowed to see that?',
            'authorize' => array('Controller')
        )
    );

    public function isAuthorized($user) {
        if ($user['role_id'] == 2) {
            return true;
        }
        return false;
    }
    

    public function beforeFilter() {
        parent::beforeFilter();
        $user = $this->Auth->user();
        $this->Auth->allow('index');
        $this->Auth->allow('add');
        $this->Auth->allow('remove');
        $this->set('current_user', $user);
        //if ($user['role_id'] != 3 || $user['role_id'] != 1) {
        if (!isset($user['role_id'])) {
            $this->redirect(array('controller' => 'Users', 'action' => 'login'));
        }
    }


    public function index() {
        $this->set('wishlists', $this->Wishlist->find("all"));
    }

    public function add($id = "") {
        $user = $this->Auth->user();
        $wishlist_exists =
                $this->Wishlist->find('first', array('conditions' =>
            array('product_id' => $id),
            'user_id' => $user['id']));
        if (empty($wishlist_exists)) {
            $data["Wishlist"] = array("product_id" => $id, "user_id" => $user['id']);
            $this->Wishlist->save($data);
        }
        $this->redirect(array("controller" => "Wishlists", "action" => "index"));
    }

    public function remove($id = "") {
        $this->Wishlist->delete($id, true);
        $this->redirect(array("controller" => "Wishlists", "action" => "index"));
    }

}

?>
