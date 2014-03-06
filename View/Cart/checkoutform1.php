<form method="post" action="">

<div class="left_cart">
    <h2 class="cart_icon">Shopping Bag</h2>
    <img src="<?php echo $this->base; ?>/img/cart.png" width="" height="" alt="shopping cart" />
</div>
<div class="cart_link">
    <ul>
        <li><a href="<?php echo $this->base; ?>/Products/all">Continue Shopping</a></li>
        <li><a href="<?php echo $this->base; ?>/Checkout" class="pink_link">Next</a></li>
    </ul>
</div>

<table class="main_address_table">
	<tr>
		<td>
			<table class="user_address">
                <tr>
                    <td colspan="2">
                        <strong>Bill Address</strong>
                    </td>
                </tr>
                <tr>
                    <td>First Name * </td>
                    <td><input type="text" name="f_name" value="<?php echo $f_name;?>" id="f_name" /></td>
                </tr>
                <tr>
                    <td>Last Name</td>
                    <td><input type="text" name="l_name" value="<?php echo $l_name;?>" id="l_name" /></td>
                </tr>        
                
                <tr>
                    <td>Company Name</td>
                    <td><input type="text" name="company_name" value="<?php echo $company_name;?>"  id="company_name" /></td>
                </tr> 
                
                <tr>
                    <td>Address1 * </td>
                    <td><input type="text" name="address1" value="<?php echo $address1;?>" id="address1" /></td>
                </tr> 
                
                <tr>
                    <td>Address2</td>
                    <td><input type="text" name="address2" value="<?php echo $address2;?>"  id="address2" /></td>
                </tr>  
                
                <tr>
                    <td>Town/City * </td>
                    <td><input type="text" name="town_city" value="<?php echo $town_city;?>" id="town_city" /></td>
                </tr> 
                
                <tr>
                    <td>Postcode * </td>
                    <td><input type="text" name="postcode" value="<?php echo $postcode;?>" id="postcode" /></td>
                </tr> 
                
                <tr>
                    <td>Contact Number * </td>
                    <td><input type="text" name="contact_no" value="<?php echo $contact_no;?>" id="contact_no" /></td>
                </tr>                                                
        
    		</table>
		</td>
	
		<td>    
			<table class="user_address">
                <tr>
                    <td colspan="2">
                        <strong>Shipping Address</strong>
						<input type="checkbox" name="same_as_billing" value="1" /> Same as billing address
                    </td>
                </tr>
                <tr>
                    <td>First Name * </td>
                    <td><input type="text" name="ship_f_name" value="<?php echo $ship_f_name;?>" id="ship_f_name" /></td>
                </tr>
                <tr>
                    <td>Last Name</td>
                    <td><input type="text" name="ship_l_name" value="<?php echo $ship_l_name;?>" id="ship_l_name" /></td>
                </tr>        
                
                <tr>
                    <td>Company Name</td>
                    <td><input type="text" name="ship_company_name" value="<?php echo $ship_company_name;?>" id="ship_company_name" /></td>
                </tr> 
                
                <tr>
                    <td>Address1 * </td>
                    <td><input type="text" name="ship_address1" value="<?php echo $ship_address1;?>" id="ship_address1" /></td>
                </tr> 
                
                <tr>
                    <td>Address2</td>
                    <td><input type="text" name="ship_address2" value="<?php echo $ship_address2;?>" id="ship_address2" /></td>
                </tr>  
                
                <tr>
                    <td>Town/City * </td>
                    <td><input type="text" name="ship_town_city" value="<?php echo $ship_town_city;?>" id="ship_town_city" /></td>
                </tr> 
                
                <tr>
                    <td>Postcode * </td>
                    <td><input type="text" name="ship_postcode" value="<?php echo $ship_postcode;?>" id="ship_postcode" /></td>
                </tr> 
                
                <tr>
                    <td>Contact Number * </td>
                    <td><input type="text" name="ship_contact_no" value="<?php echo $ship_contact_no;?>" id="ship_contact_no" /></td>
                </tr>                                                
                
            </table>    
		</td>
	</tr>  
</table>
<table class="align">
<tr class="bg1">
    <td colspan="1" class="" style="text-align: left;"><h2>SHOP ONLINE WITH CONFIDENCE</h2></td>
    <td colspan="1" class="" style="text-align: left;">
        <ul>
            <li>Shipping Cost and Delivery Times</li>
            <li>Privacy and Security</li>
            <li>Easy Returns to our stores or by mail</li>            
        </ul>
    </td>
    <td colspan="3"> <input type="submit" name="submit" value="Next" class="pink_link"> </td>
</tr>
</table>
<!--<img src="app/webroot/img/express_checkout.jpg" width="100"/>-->            
           
</form>