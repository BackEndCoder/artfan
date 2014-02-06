<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProductDetails
 *
 * @author Wilson<mailwilson007@gmail.com>
 */
 
App::uses('ProductsController', 'Controller');
App::uses('UsersController', 'Controller');  
  
class CheckoutController extends AppController {
    public $uses = array();
    //public $components = array();		
	public $components = array('Auth');

    public function beforeFilter() {
        parent::beforeFilter();
        
        $this->Auth->allow('index');
        $this->layout = "default";
    }	

    public function index($id = null) {
	
		$first_name 	= '';
		$last_name 		= '';		
		$email 			= '';	
		if ($this->Auth->loggedIn()){
			$u = $this->Auth->user();			
						
			$log_first_name 	= $u['first_name'];
			$log_last_name 		= $u['last_name'];			
			$log_email 			= $u['email'];	
			$log_address		= $u['address'];						
		}
		else {
			$log_first_name 	= '';
			$log_last_name 		= '';
			$log_email 			= '';
			$log_address		= '';
		}
		$this->set('log_first_name', $log_first_name);
		$this->set('log_last_name', $log_last_name);
		$this->set('log_email', $log_email);
		$this->set('log_address', $log_address);			
	
		$res_model = $this->Checkout->aaa();		
		$this->set('id', $id);		
        $this->set('res_model', $res_model);		
				
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
        $this->set('products', $products);	
		$this->set('cartproducts', $products);		
		
		
		
		


							
    }
}

?>
