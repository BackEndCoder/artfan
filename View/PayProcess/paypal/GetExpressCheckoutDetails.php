<?php

/********************************************************

GetExpressCheckoutDetails.php



This functionality is called after the buyer returns from

PayPal and has authorized the payment.
Displays the payer details returned by the
GetExpressCheckoutDetails response and calls
DoExpressCheckoutPayment.php to complete the payment
authorization.
Called by ReviewOrder.php.
Calls DoExpressCheckoutPayment.php and APIError.php.
<?php echo get_template_directory_uri();?>/paypal/DoExpressCheckoutPayment.php" 
********************************************************/
if (!isset($_SESSION)) 
	session_start();		
$wp_site_url = "http://idreamsuk.com/artfan";	
?>
<form action="<?php echo $wp_site_url; ?>/Paypalback" method="POST">
     <input type="hidden" value="<?php echo $resArray['TOKEN']; ?>" name="token"/>
     <input type="hidden" value="<?php echo $resArray['PAYERID']; ?>" name="payerID"/>     
     <input type="hidden" value="<?php echo $resArray['AMT']; ?>" name="amt"/>
     <input type="hidden" value="<?php echo $resArray['CURRENCYCODE']; ?>" name="currencyCode"/>
     <input type="submit" value="Confirm Payment With Paypal" />
</form>