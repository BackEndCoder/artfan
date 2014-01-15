<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProductsController
 *
 * @author Wilson<mailwilson007@gmail.com>
 */
App::uses('AppController', 'Controller');

class ColorsController extends AppController {

    public $name = 'Colors';
    public $scaffold = '';
    var $paginate = array('Color' => array('limit' => 10));
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
        if ($user['role_id'] == 1) {
            return true;
        }
        return false;
    }

    public function beforeFilter() {
        parent::beforeFilter();
        $user = $this->Auth->user();
        $this->set('current_user', $user);
        if ($user['role_id'] != 1) {
            $this->redirect(array('controller' => 'Users', 'action' => 'login'));
        }
        $this->layout = "admin";
    }
}

?>
