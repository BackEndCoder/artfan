<style>
    table.main_address_table {
        width: 100%;
        border: 1px solid #F00;
        margin-bottom: 10px;
    }
    table.tbl_product_list {
        width: 100%;
    }
</style>


<?php
    $f_name = '';
    $l_name = '';   
    $company_name = '';
    $address1 = '';
    $address2 = '';
    $town_city = '';
    $postcode = '';
    $contact_no = '';   
    $ship_f_name = '';
    $ship_l_name = '';  
    $ship_company_name = '';
    $ship_address1 = '';
    $ship_address2 = '';
    $ship_town_city = '';
    $ship_postcode = '';
    $ship_contact_no = '';      
    $total = '';
?>


<?php
$this->Html->addCrumb('Cart', array('controller'=>'cart','action'=>'index'));
$this->Html->addCrumb('Checkout', array('controller'=>'cart','action'=>'checkout'));
?>
<style>
.pink_link_top {
	margin-top: -20px;
	padding: 0px;
	padding:1px 6px;
	border: none;background: #E3007E !important;
	background: none repeat scroll 0 0 #E3007E;
	color: #FFFFFF;
	font-family: 'HelveticaNeueRegular',Helvetica,Arial,sans-serif;	
}
</style>

<?php
	if(isset($_POST['f_name']) && !empty($_POST['f_name']))
		$f_name 			= trim(addslashes($_POST['f_name']));
	
	if(isset($_POST['l_name']) && !empty($_POST['l_name']))		
		$l_name 			= trim(addslashes($_POST['l_name']));
		
		
	if(isset($_POST['email']) && !empty($_POST['email']))		
		$email 			= trim(addslashes($_POST['email']));		
		
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
		
	if(isset($_POST['ship_email']) && !empty($_POST['ship_email']))		
		$ship_email 		= trim(addslashes($_POST['ship_email']));		
		
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
	
	$total 				= '';
?>


<form action="" method="POST">
<div class="left_cart">
    <h2 class="cart_icon">Shopping Bag</h2>
    <img src="/img/3.png" width="" height="" alt="shopping cart" />
</div>
<div class="cart_link">
    <ul>
        <li><a href="<?php echo Router::url(array('controller'=>'art','action'=>'index')); ?>">Continue Shopping</a></li>
        <li><input type="submit" name="submit" value="Next" class="pink_link_top"></li>
    </ul>
</div>
<div style="clear: both;"></div>

<h2>Product Order List</h2>
<table>
	<tr>
    	<td>Product Name</td>
        <td>Price(&pound;)</td>
        <td>Qty</td>        
    </tr>
<?php 
foreach ($data as $key => $data) : 
foreach ($data as $data) : 
	$prod_name 		= $data[$key]['title'];
	$prod_charge 	= $data[$key]['price'];
	$prod_qty		= $data['quantity'];
	$total			+= $prod_charge*$prod_qty; 
	?>	
    <tr>	
		<td><?php echo $prod_name; ?></td>
    	<td><?php echo $prod_charge; ?></td>
        <td><?php echo $prod_qty; ?></td>  		    
    </tr>
	<?php
endforeach; 
endforeach; 
?>  
	<tr>
    	<td colspan="3">Total: &pound; <?php echo $total; ?></td>
    </tr>
</table>


<table style="border:0;">
	<tr>
    	<td style="border:0;">
			<table class="user_address">
                <tr>
                    <td colspan="2">
                        <h2>Bill Address</h2>
                    </td>
                </tr>
                <tr>
                    <td width="140px">First Name </td>
                    <td>
						<?php echo $f_name;?>
                        <input type="hidden" name="f_name" value="<?php echo $f_name; ?>" />
                    </td>
                </tr>
                <tr>
                    <td>Last Name</td>
                    <td>
						<?php echo $l_name;?>
                        <input type="hidden" name="l_name" value="<?php echo $l_name; ?>" />
                    </td>
                </tr> 
                
                
				<tr>
                    <td>Email</td>
                    <td>
						<?php echo $email;?>
                        <input type="hidden" name="email" value="<?php echo $email; ?>" />
                    </td>
                </tr>                        
                
                <tr>
                    <td>Company Name</td>
                    <td>
						<?php echo $company_name;?>
                        <input type="hidden" name="company_name" value="<?php echo $company_name; ?>" />
                    </td>
                </tr> 
                
                <tr>
                    <td>Address1 </td>
                    <td>
						<?php echo $address1;?>
                        <input type="hidden" name="address1" value="<?php echo $address1; ?>" />
                    </td>
                </tr> 
                
                <tr>
                    <td>Address2</td>
                    <td>
						<?php echo $address2;?>
                        <input type="hidden" name="address2" value="<?php echo $address2; ?>" />
                    </td>
                </tr>  
                
                <tr>
                    <td>Town/City </td>
                    <td>
						<?php echo $town_city;?>
                        <input type="hidden" name="town_city" value="<?php echo $town_city; ?>" />
                    </td>
                </tr> 
                
                <tr>
                    <td>Postcode </td>
                    <td>
						<?php echo $postcode;?>
                        <input type="hidden" name="postcode" value="<?php echo $postcode; ?>" />
                    </td>
                </tr> 
                
                <tr>
                    <td>Contact Number </td>
                    <td>
						<?php echo $contact_no;?>
                        <input type="hidden" name="contact_no" value="<?php echo $contact_no; ?>" />
                    </td>
                </tr>                                                
        
    		</table>        
        </td>
        
        <td style="border:0;">
			<table class="user_address">
                <tr>
                    <td colspan="2">
                        <h2>Shipping Address</h2>
                    </td>
                </tr>
                <tr>
                    <td width="140px">First Name </td>
                    <td>
						<?php echo $ship_f_name;?>
                        <input type="hidden" name="ship_f_name" value="<?php echo $ship_f_name; ?>" />
                    </td>
                </tr>
                <tr>
                    <td>Last Name</td>
                    <td>
						<?php echo $ship_l_name;?>
                        <input type="hidden" name="ship_l_name" value="<?php echo $ship_l_name; ?>" />
                    </td>
                </tr> 
                
				<tr>
                    <td>Email</td>
                    <td>
						<?php echo $ship_email;?>
                        <input type="hidden" name="ship_email" value="<?php echo $ship_email; ?>" />
                    </td>
                </tr>                       
                
                <tr>
                    <td>Company Name</td>
                    <td>
						<?php echo $ship_company_name;?>
                        <input type="hidden" name="ship_company_name" value="<?php echo $ship_company_name; ?>" />
                    </td>
                </tr> 
                
                <tr>
                    <td>Address1 </td>
                    <td>
						<?php echo $ship_address1;?>
                        <input type="hidden" name="ship_address1" value="<?php echo $ship_address1; ?>" />
                    </td>
                </tr> 
                
                <tr>
                    <td>Address2</td>
                    <td>
						<?php echo $ship_address2;?>
                        <input type="hidden" name="ship_address2" value="<?php echo $ship_address2; ?>" />
                    </td>
                </tr>  
                
                <tr>
                    <td>Town/City </td>
                    <td>
						<?php echo $ship_town_city;?>
                        <input type="hidden" name="ship_town_city" value="<?php echo $ship_town_city; ?>" />
                    </td>
                </tr> 
                
                <tr>
                    <td>Postcode </td>
                    <td>
						<?php echo $ship_postcode;?>
                        <input type="hidden" name="ship_postcode" value="<?php echo $ship_postcode; ?>" />
                    </td>
                </tr> 
                
                <tr>
                    <td>Contact Number </td>
                    <td>
						<?php echo $ship_contact_no;?>
                        <input type="hidden" name="ship_contact_no" value="<?php echo $ship_contact_no; ?>" />
                    </td>
                </tr>                                                
        
    		</table>         
        </td>    
    </tr>
</table>




	<input type=hidden name=paymentType value='Sale' >
    <input type="hidden" size="30" maxlength="32" name="PERSONNAME" value="<?php echo $f_name.' '.$l_name; ?>" />
    <input type="hidden" size="30" maxlength="32" name="SHIPTOSTREET" value="<?php echo $ship_address1; ?>" />
    <input type="hidden" size="30" maxlength="32" name="SHIPTOCITY" value="<?php echo $ship_town_city; ?>" />
    <input type="hidden" size="30" maxlength="32" name="SHIPTOSTATE" value="<?php echo $ship_address1; ?>" />
    <input type="hidden" size="30" maxlength="32" name="SHIPTOZIP" value="<?php echo $ship_postcode; ?>" />        
	<?php 
	foreach ($products as $product) : 
		$prod_name 		= $product['Product']['title'];
		$prod_charge 	= $product['Product']['price'];
		$prod_qty		= $product['Product']['Quantity'];
		$total			+= $prod_charge*$prod_qty; 
		?>		
        <input type="hidden" name="<?php echo $prod_name; ?>" value="<?php echo $prod_charge; ?>" />
        <input type="hidden" name="L_NAME[]" value="<?php echo $prod_name; ?>" />
        <input type="hidden" name="L_AMT[]" value="<?php echo $prod_charge; ?>" />
        <input type="hidden" name="L_QTY[]" value="<?php echo $prod_qty; ?>" />   		    
		<?php
    endforeach; 
	?>   
    
    
    <div><h3>Select Payment Type</h3></div>
    <div class="payment_type">
    	<input type="radio" value="1" name="payment_type" checked="checked" /><img src="<?php echo $this->base; ?>/img/payment_type1.jpg" width="60px" />
    	<input type="radio" value="1" name="payment_type" /><img src="<?php echo $this->base; ?>/img/payment_type2.jpg" width="140px" />
    </div>    
         
    <input type="submit" name="submit" value="Place Order" /> 
</form>