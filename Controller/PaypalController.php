<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PaypalController
 *
 * @author Anil<pgmr.anil@gmail.com>
 */
App::uses('AppController', 'Controller');
App::uses('OrderDetailController', 'Controller');

class PaypalController extends AppController {

    public $name = 'Paypal';
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
        if ($user['role_id'] == 1 || $user['role_id'] == 2) {
            return true;
        }
        return false;
    }

    public function beforeFilter() {
        parent::beforeFilter();
        $user = $this->Auth->user();
        $this->set('current_user', $user);
        $this->Auth->allow('all');
        $this->layout = "admin";
    }

    public function index() {
        $user = $this->Auth->user();
        if ($user['role_id'] == 1) {
			$orderCtrl = new OrderDetailController(); 
			$allOrder = $orderCtrl -> OrderDetail -> listAllOrder();			
    		$this->set('allorder', $allOrder);
        }
    }
    
}

?>
