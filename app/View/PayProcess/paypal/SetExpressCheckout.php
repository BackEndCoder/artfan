<?php

/***********************************************************

SetExpressCheckout.php



This is the main web page for the Express Checkout sample.

The page allows the user to enter amount and currency type.

It also accept input variable paymentType which becomes the

value of the PAYMENTACTION parameter.



When the user clicks the Submit button, ReviewOrder.php is

called.



Called by index.html.



Calls ReviewOrder.php.



***********************************************************/

// clearing the session before starting new API Call

session_unset();

$wp_site_url = "http://idreamsuk.com/artfan";
?>





<html>

<head>

    <title>PayPal NVP SDK - Simplified Shopping Cart Page for a Spiritual Store</title>

    <link href="sdk.css" rel="stylesheet" type="text/css" />

</head>

<body>


	<form action="<?php echo $wp_site_url;?>/PayProcess" method="POST">    
		<?php
            $paymentType		= $_REQUEST['paymentType'];
            $personName       	= $_REQUEST['PERSONNAME'];
            $SHIPTOSTREET       = $_REQUEST['SHIPTOSTREET'];
            $SHIPTOCITY         = $_REQUEST['SHIPTOCITY'];
            $SHIPTOSTATE	    = $_REQUEST['SHIPTOSTATE'];
            $SHIPTOCOUNTRYCODE  = 'UK';
            $SHIPTOZIP          = $_REQUEST['SHIPTOZIP'];		   		   
        ?>
        <input type=hidden name=paymentType value='<?php echo $paymentType?>' >
        <input type="text" name="currencyCodeType" value="GBP">
        <input type="text" size="30" maxlength="32" name="PERSONNAME" value="<?php echo $personName; ?>_test" /></td>
        <input type="text" size="30" maxlength="32" name="SHIPTOSTREET" value="<?php echo $SHIPTOSTREET; ?>_test" /></td>
        <input type="text" size="30" maxlength="32" name="SHIPTOCITY" value="<?php echo $SHIPTOCITY; ?>_test" /></td>
        <input type="text" size="30" maxlength="32" name="SHIPTOSTATE" value="<?php echo $SHIPTOSTATE; ?>_tset" /></td>
        <input type="text" size="30" maxlength="32" name="SHIPTOCOUNTRYCODE" value="<?php echo $SHIPTOCOUNTRYCODE; ?>" /></td>
        <input type="text" size="30" maxlength="32" name="SHIPTOZIP" value="<?php echo $SHIPTOZIP; ?>_test" /></td>
        <input type="image" name="submit" src="https://www.paypal.com/en_US/i/btn/btn_xpressCheckout.gif" />
    
	</form>
</body>

</html>

