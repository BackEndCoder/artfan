<?php
if (!isset($_SESSION)) 
	session_start();		
$wp_site_url = "http://idreamsuk.com/artfan";	
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
	?> 

		<h3 id="confirm_payment">Please confirm the following bill from paypal. </h3>
        <div class="left_cart">
            <h2 class="cart_icon">Shopping Bag</h2>
            <img src="<?php echo $this->base; ?>/img/4.png" width="" height="" alt="shopping cart" />
        </div>
        <div style="clear: both;"></div>        
        <table width="100%" id="express">
            <tr class="col_bg">
                <td colspan="2"><strong>Payer Information</strong></td>
            </tr>
            <tr>
                <td>Papal Payer Id:</td> 
                <td><?php echo $payer_id; ?></td>
            </tr>    
            <tr>
                <td>Name:</td> 
                <td><?php echo $payer_first_name.' '.$payer_last_name; ?></td>
            </tr>
            <tr>
                <td>Email:</td> 
                <td><?php echo $payer_mail; ?></td>
            </tr>
            <tr>
                <td>Total amount:</td> 
                <td>&pound; <?php echo $payer_total_amt; ?></td>
            </tr>    
        </table>        
        <form action="<?php echo $wp_site_url; ?>/Paypalback" method="POST">
             <input type="hidden" value="<?php echo $resArray['TOKEN']; ?>" name="token"/>
             <input type="hidden" value="<?php echo $resArray['PAYERID']; ?>" name="payerID"/>     
             <input type="hidden" value="<?php echo $resArray['AMT']; ?>" name="amt"/>
             <input type="hidden" value="<?php echo $resArray['CURRENCYCODE']; ?>" name="currencyCode"/>
             <input type="submit" value="Confirm Payment With Paypal" id="checkout_payment" />
        </form>    
    <?php
	}
?>