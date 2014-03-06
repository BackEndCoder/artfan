<?php
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
	
	$total 				= '';
?>

<h2>Product Order List</h2>
<table>
	<tr>
    	<td>Product Name</td>
        <td>Price(&pound;)</td>
        <td>Qty</td>        
    </tr>
<?php 
foreach ($products as $product) : 
	$prod_name 		= $product['Product']['title'];
	$prod_charge 	= $product['Product']['price'];
	$prod_qty		= $product['Product']['Quantity'];
	$total			+= $prod_charge*$prod_qty; 
	?>	
    <tr>	
		<td><?php echo $prod_name; ?></td>
    	<td><?php echo $prod_charge; ?></td>
        <td><?php echo $prod_qty; ?></td>  		    
    </tr>
	<?php
endforeach; 
?>  
	<tr>
    	<td colspan="3">Total: &pound; <?php echo $total; ?></td>
    </tr>
</table>


<table>
	<tr>
    	<td>
			<table class="user_address">
                <tr>
                    <td colspan="2">
                        <h2>Bill Address</h2>
                    </td>
                </tr>
                <tr>
                    <td>First Name </td>
                    <td><?php echo $f_name;?></td>
                </tr>
                <tr>
                    <td>Last Name</td>
                    <td><?php echo $l_name;?></td>
                </tr>        
                
                <tr>
                    <td>Company Name</td>
                    <td><?php echo $company_name;?></td>
                </tr> 
                
                <tr>
                    <td>Address1 </td>
                    <td><?php echo $address1;?></td>
                </tr> 
                
                <tr>
                    <td>Address2</td>
                    <td><?php echo $address2;?></td>
                </tr>  
                
                <tr>
                    <td>Town/City </td>
                    <td><?php echo $town_city;?></td>
                </tr> 
                
                <tr>
                    <td>Postcode </td>
                    <td><?php echo $postcode;?></td>
                </tr> 
                
                <tr>
                    <td>Contact Number </td>
                    <td><?php echo $contact_no;?></td>
                </tr>                                                
        
    		</table>        
        </td>
        
        <td>
			<table class="user_address">
                <tr>
                    <td colspan="2">
                        <h2>Shipping Address</h2>
                    </td>
                </tr>
                <tr>
                    <td>First Name </td>
                    <td><?php echo $ship_f_name;?></td>
                </tr>
                <tr>
                    <td>Last Name</td>
                    <td><?php echo $ship_l_name;?></td>
                </tr>        
                
                <tr>
                    <td>Company Name</td>
                    <td><?php echo $ship_company_name;?></td>
                </tr> 
                
                <tr>
                    <td>Address1 </td>
                    <td><?php echo $ship_address1;?></td>
                </tr> 
                
                <tr>
                    <td>Address2</td>
                    <td><?php echo $ship_address2;?></td>
                </tr>  
                
                <tr>
                    <td>Town/City </td>
                    <td><?php echo $ship_town_city;?></td>
                </tr> 
                
                <tr>
                    <td>Postcode </td>
                    <td><?php echo $ship_postcode;?></td>
                </tr> 
                
                <tr>
                    <td>Contact Number </td>
                    <td><?php echo $ship_contact_no;?></td>
                </tr>                                                
        
    		</table>         
        </td>    
    </tr>
</table>



<form action="<?php echo $this->base;?>/PayProcess" method="POST"> 
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
    <input type="submit" name="submit" value="Place Order" />        
</form>