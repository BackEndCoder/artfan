<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Products
 *
 * @author user
 */
class OrderDetail extends AppModel {
	var $name = 'OrderDetail';
	public $useTable = 'order_detail';			
	public function listAllOrder() {	
		$res = $this->query("SELECT * FROM order_detail");
		return $res;
	}		
}
?>
