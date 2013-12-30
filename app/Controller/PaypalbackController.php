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
App::uses('OrderDetailController', 'Controller');
class PaypalbackController extends AppController {
    public $uses = array();
    //public $components = array();
    public function index() {
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
		
		
		
		
		
		
		
	require_once 'paypal/CallerService.php';

/* An express checkout transaction starts with a token, that
   identifies to PayPal your transaction
   In this example, when the script sees a token, the script
   knows that the buyer has already authorized payment through
   paypal.  If no token was found, the action is to send the buyer
   to PayPal to first authorize payment
   */


if(! isset($_REQUEST['token'])) {
			/* 
				The servername and serverport tells PayPal where the buyer
			   should be directed back to after authorizing payment.
			   In this case, its the local webserver that is running this script
			   Using the servername and serverport, the return URL is the first
			   portion of the URL that buyers will return to after authorizing payment
			*/																					
			$serverName = $_SERVER['SERVER_NAME'];
			$serverPort = $_SERVER['SERVER_PORT'];						
			//$wp_site_url = 'http://localhost/artfan';			
			//$wp_site_url = 'http://idreamsuk.com/artfan';
			
			$wp_site_url = Router::url('/', true);
									
		   $url=dirname('http://'.$serverName.':'.$serverPort.$_SERVER['REQUEST_URI']);
		   
		   $currencyCodeType= 'GBP';
		   $paymentType= 'Sale';
		   
	   
		   
		   /********************* My Request Page ***********************/
		   
		   
			if(isset($_POST['f_name']) && !empty($_POST['f_name']))
				$f_name 			= trim(addslashes($_POST['f_name']));
			
			if(isset($_POST['l_name']) && !empty($_POST['l_name']))		
				$l_name 			= trim(addslashes($_POST['l_name']));
				
			if(isset($_POST['company_name']) && !empty($_POST['company_name']))				
				$company_name 		= trim(addslashes($_POST['company_name']));
				
			if(isset($_POST['address1']) && !empty($_POST['address1']))			
				$address1 			= trim(addslashes($_POST['address1']));
				
			if(isset($_POST['address2']) && !empty($_POST['address2']))			
				$address2 			= trim(addslashes($_POST['address2']));
				
			if(isset($_POST['town_city']) && !empty($_POST['town_city']))	
				$town_city 			= trim(addslashes($_POST['town_city']));
				
			if(isset($_POST['postcode']) && !empty($_POST['postcode']))			
				$postcode 			= trim(addslashes($_POST['postcode']));
				
			if(isset($_POST['contact_no']) && !empty($_POST['contact_no']))			
				$contact_no 		= trim(addslashes($_POST['contact_no']));
				
			if(isset($_POST['ship_f_name']) && !empty($_POST['ship_f_name']))			
				$ship_f_name 		= trim(addslashes($_POST['ship_f_name']));
				
			if(isset($_POST['ship_l_name']) && !empty($_POST['ship_l_name']))		
				$ship_l_name 		= trim(addslashes($_POST['ship_l_name']));
				
			if(isset($_POST['ship_company_name']) && !empty($_POST['ship_company_name']))		
				$ship_company_name 	= trim(addslashes($_POST['ship_company_name']));
				
			if(isset($_POST['ship_address1']) && !empty($_POST['ship_address1']))		
				$ship_address1 		= trim(addslashes($_POST['ship_address1']));
				
			if(isset($_POST['ship_address2']) && !empty($_POST['ship_address2']))			
				$ship_address2 		= trim(addslashes($_POST['ship_address2']));
				
			if(isset($_POST['ship_town_city']) && !empty($_POST['ship_town_city']))		
				$ship_town_city 	= trim(addslashes($_POST['ship_town_city']));
				
			if(isset($_POST['ship_postcode']) && !empty($_POST['ship_postcode']))			
				$ship_postcode 		= trim(addslashes($_POST['ship_postcode']));
				
			if(isset($_POST['ship_contact_no']) && !empty($_POST['ship_contact_no']))		
				$ship_contact_no 	= trim(addslashes($_POST['ship_contact_no']));		   
		   
		   
		   
		   /*********************  My Request Page ***********************/
		   

		   
		   
           $personName        = $_REQUEST['PERSONNAME'];
		   $SHIPTOSTREET      = $_REQUEST['SHIPTOSTREET'];
		   $SHIPTOCITY        = $_REQUEST['SHIPTOCITY'];
		   $SHIPTOSTATE	      = $_REQUEST['SHIPTOSTATE'];
		   $SHIPTOCOUNTRYCODE = 'UK';
		   $SHIPTOZIP         = $_REQUEST['SHIPTOZIP'];		   		   
		   $str = '';			   
		   $itemamt = 0.00;
		   foreach($_REQUEST['L_NAME'] as $ky => $val) {
				$L_NAME           = $_REQUEST['L_NAME'][$ky];
				$L_AMT            = $_REQUEST['L_AMT'][$ky];
				$L_QTY            = $_REQUEST['L_QTY'][$ky];				
				$itemamt += $L_QTY*$L_AMT;
				$str .= "&L_NAME".$ky."=".$L_NAME."&L_AMT".$ky."=".$L_AMT."&L_QTY".$ky."=".$L_QTY;				
		   }		   
		   
		   $cancelURL =urlencode("$url/SetExpressCheckout.php?paymentType=$paymentType" );		   		   
		   
		   
		   $ll_user_id = 	123456789;	   		   		   
		   
		   
		   $returnURL =urlencode($wp_site_url.'PayProcess?currencyCodeType='.$currencyCodeType.'&paymentType='.$paymentType.'&uid='.$ll_user_id);
		   

		   
           $amt = $itemamt;
           $maxamt= $itemamt;
           $nvpstr="";
		   		   
           /*
            * Setting up the Shipping address details
            */
           $shiptoAddress = "&SHIPTONAME=$personName&SHIPTOSTREET=$SHIPTOSTREET&SHIPTOCITY=$SHIPTOCITY&SHIPTOSTATE=$SHIPTOSTATE&SHIPTOCOUNTRYCODE=$SHIPTOCOUNTRYCODE&SHIPTOZIP=$SHIPTOZIP";
           
           $nvpstr="&ADDRESSOVERRIDE=1$shiptoAddress".$str."&MAXAMT=".(string)$maxamt."&AMT=".(string)$amt."&ITEMAMT=".(string)$itemamt."&CALLBACKTIMEOUT=4&ReturnUrl=".$returnURL."&CANCELURL=".$cancelURL ."&CURRENCYCODE=".$currencyCodeType."&PAYMENTACTION=".$paymentType;

		 	/* Make the call to PayPal to set the Express Checkout token
			If the API call succeded, then redirect the buyer to PayPal
			to begin to authorize payment.  If an error occured, show the
			resulting errors
			*/


		   $resArray=hash_call("SetExpressCheckout",$nvpstr);
		   




		   
		   $_SESSION['reshash']=$resArray;

		   $ack = strtoupper($resArray["ACK"]);
		   


		   

		   if($ack=="SUCCESS"){
				// Redirect to paypal.com here
				$token = urldecode($resArray["TOKEN"]);
				//store																																				
				$payPalURL = PAYPAL_URL.$token;								
				?>                    
				<script>
					document.location = '<?php echo $payPalURL;?>';
				</script>
                <?php			
					header("Location: ".$payPalURL);
				  } else  {
				  
					 //Redirecting to APIError.php to display errors.
						$location = "APIError.php";
						header("Location: $location");
					}
} else {
		 /* At this point, the buyer has completed in authorizing payment
			at PayPal.  The script will now call PayPal with the details
			of the authorization, incuding any shipping information of the
			buyer.  Remember, the authorization is not a completed transaction
			at this state - the buyer still needs an additional step to finalize
			the transaction
			*/

		   $token =urlencode( $_REQUEST['token']);		   		   

		   
		   $_SESSION['token'] = $token;

			/* Build a second API request to PayPal, using the token as the
			ID to get the details on the payment authorization
			*/
		   $nvpstr="&TOKEN=".$token;
		   
			/* Make the API call and store the results in an array.  If the
			call was a success, show the authorization details, and provide
			an action to complete the payment.  If failed, show the error
			*/
			
			$resArray=hash_call("GetExpressCheckoutDetails",$nvpstr);
			$_SESSION['reshash']=$resArray;
			$ack = strtoupper($resArray["ACK"]);
		    if($ack == 'SUCCESS' || $ack == 'SUCCESSWITHWARNING'){							
		
				require_once ("paypal/GetExpressCheckoutDetails.php");
			?>
                    
                  
      
	  <?php     
	  } else  {
		//Redirecting to APIError.php to display errors.
		$location = "paypal/APIError.php";

		header("Location: $location");
	  }
}		
		

		
    }
	
									
}

?>
