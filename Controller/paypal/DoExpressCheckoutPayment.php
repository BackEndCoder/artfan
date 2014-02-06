<?php 
require_once 'CallerService.php';

ini_set('session.bug_compat_42',0);

ini_set('session.bug_compat_warn',0);

$token =urlencode( $_POST['token']);

$paymentAmount =urlencode ($_POST['amt']);

$paymentType = 'Sale';

$currCodeType = urlencode($_POST['currencyCode']);

$payerID = urlencode($_POST['payerID']);

$serverName = urlencode($_SERVER['SERVER_NAME']);
$nvpstr='&TOKEN='.$token.'&PAYERID='.$payerID.'&PAYMENTACTION='.$paymentType.'&AMT='.$paymentAmount.'&CURRENCYCODE='.$currCodeType.'&IPADDRESS='.$serverName ;

 /* Make the call to PayPal to finalize payment

    If an error occured, show the resulting errors

    */

$resArray=hash_call("DoExpressCheckoutPayment",$nvpstr);

/* Display the API response back to the browser.

   If the response from PayPal was a success, display the response parameters'

   If the response was an error, display the errors received using APIError.php.

   */

$ack = strtoupper($resArray["ACK"]);

if($ack != 'SUCCESS' && $ack != 'SUCCESSWITHWARNING'){
	$_SESSION['reshash']=$resArray;
	$location = "APIError.php";
		 header("Location: $location");
}

//echo "Your transaction has been successfully processed. Thank you for shopping with us.";

	$objOrderDetail = new OrderDetailController();
	$st = 'Compl';

	$objOrderDetail->OrderDetail->query("UPDATE order_detail SET payment_status = 'Complete' WHERE user_paypal_id = '".$_POST['user_paypal_id']."'");




?>