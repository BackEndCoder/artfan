<?php

App::uses('ProductsController', 'Controller');
App::uses('UsersController', 'Controller');

class HeaderController extends AppController {

    public $name = 'Header';
    public $uses = array(''); 

    public function getTotalCartPrice($id = null) {						
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
		$cart_cnt = 0;
		$total = 0;
		foreach ($products as $product) : 														
			$prod_charge 	= $product['Product']['price'];
			$prod_qty		= $product['Product']['Quantity'];
			$total			+= $prod_charge*$prod_qty; 
			$cart_cnt++;
		endforeach;				
		return $total;
    }	
}

?>
