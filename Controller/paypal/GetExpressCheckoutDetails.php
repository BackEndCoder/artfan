<?php
if (!isset($_SESSION)) 
	session_start();		
	//$wp_site_url = "http://idreamsuk.com/artfan";	
	//$wp_site_url = "http://localhost/artfan";	
	$wp_site_url = Router::url('/', true);
	foreach($resArray as $key=>$val) {
		if($key == 'PAYERID') {
			$payer_id = $val;
		}
		if($key == 'EMAIL') {
			$payer_mail = $val;
		}
		if($key == 'FIRSTNAME') {
			$payer_first_name = $val;
		}		
		if($key == 'LASTNAME') {
			$payer_last_name = $val;
		}				
		if($key == 'AMT') {
			$payer_total_amt = $val;
		}						
	}
	if(isset($_POST) &!empty($_POST)) {		
		include_once('DoExpressCheckoutPayment.php');				
	}
	else {
		$this->set('wp_site_url', $wp_site_url);
		$this->set('payer_id', $payer_id);	
		$this->set('payer_mail', $payer_mail);
		$this->set('payer_first_name', $payer_first_name);	
		$this->set('payer_last_name', $payer_last_name);
		$this->set('payer_total_amt', $payer_total_amt);
		$this->set('resArray', $resArray);			   
	}	
?>
