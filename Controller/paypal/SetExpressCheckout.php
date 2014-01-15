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
//$wp_site_url = "http://idreamsuk.com/artfan";
$wp_site_url = Router::url('/', true);
?>


