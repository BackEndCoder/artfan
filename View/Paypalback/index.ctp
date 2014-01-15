<?php
	if(isset($_POST) &!empty($_POST)) {
		echo '<h3 id="confirm_payment">Your transaction has been successfully processed. Thank you for shopping with us.';
	}
	else {
?>
<h3 id="confirm_payment">Please confirm the following bill from paypal. </h3>
<div class="left_cart">
	<h2 class="cart_icon">Shopping Bag</h2>
	<img src="<?php echo $this->base; ?>/img/4.png" width="" height="" alt="shopping cart" />
</div>
<div style="clear: both;"></div>        
<table width="100%">
	<tr>
		<td colspan="2">Payer Information</td>
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
<form action="<?php echo $wp_site_url; ?>Paypalback" method="POST">
	 <input type="hidden" value="<?php echo $resArray['TOKEN']; ?>" name="token"/>
	 <input type="hidden" value="<?php echo $resArray['PAYERID']; ?>" name="payerID"/>     
	 <input type="hidden" value="<?php echo $resArray['AMT']; ?>" name="amt"/>
	 <input type="hidden" value="<?php echo $resArray['CURRENCYCODE']; ?>" name="currencyCode"/>	 
	 <input type="hidden" value="<?php echo $_GET['uid']; ?>" name="user_paypal_id" />
	 <input type="submit" value="Confirm Payment With Paypal" />
</form>
<?php
}
?>
