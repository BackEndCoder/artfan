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
	$f_name = $log_first_name;
	$l_name = $log_last_name;
	$email  = $log_email;
	$address = $log_address;
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

<link rel="stylesheet" href="/css/bootstrap.css" />

<form method="post" action="" id="ship_bill">

<div class="left_cart">
    <h2 class="cart_icon">Shopping Bag</h2>
    <img src="/img/2.png" width="" height="" alt="shopping cart" />
</div>
<div class="cart_link">
    <ul>
        <li><a href="<?php echo Router::url(array('controller'=>'art','action'=>'index')); ?>">Continue Shopping</a></li>
        <li><input type="submit" name="submit" value="Next" class="pink_link_top"></li>
    </ul>
</div>

<table class="main_address_table" style="border:0;">
	<tr>
		<td style="border:0;">
			<table class="user_address">
                <tr>
                    <td colspan="2">
                        <strong>Bill Address</strong>
                    </td>
                </tr>
                <tr>
                    <td width="140px">First Name * </td>
                    <td>
                    <input type="text" name="f_name" id="f_name" data-required="true"  data-describedby="f_name_desc" data-description="f_name" value="<?php echo $f_name;?>"/>
                    <div id="f_name_desc"></div> 
                    </td>
                </tr>
                <tr>
                    <td>Last Name</td>
                    <td><input type="text" name="l_name" value="<?php echo $l_name;?>" id="l_name" /></td>
                </tr>  
                
                <tr>
                    <td>Email *</td>
                    <td>
                    	<input name="email"  id="email" data-required="true"  type="text" data-describedby="email_desc" data-description="email" value="<?php echo $email;?>" data-pattern="^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$" />
                    	<div id="email_desc"></div>     
                    </td>
                </tr>        
                
                <tr>
                    <td>Company Name</td>
                    <td><input type="text" name="company_name" value="<?php echo $company_name;?>"  id="company_name" /></td>
                </tr> 
                
                <tr>
                    <td>Address1 * </td>
                    <td>
						<input type="text" name="address1" id="address1" data-required="true"  data-describedby="address1_desc" data-description="address1" value="<?php echo $address; ?>"/>
                    	<div id="address1_desc"></div>                                                 
                    </td>
                </tr> 
                
                <tr>
                    <td>Address2</td>
                    <td><input type="text" name="address2" value="<?php echo $address2;?>"  id="address2" /></td>
                </tr>  
                
                <tr>
                    <td>Town/City * </td>
                    <td>
                        <input type="text" name="town_city" id="town_city" data-required="true"  data-describedby="town_city_desc" data-description="town_city" value="<?php echo $town_city;?>"/>
                        <div id="town_city_desc"></div>                         
                    </td>
                </tr> 
                
                <tr>
                    <td>Postcode * </td>
                    <td>
						<input type="text" name="postcode" id="postcode" data-required="true"  data-describedby="postcode_desc" data-description="postcode" value="<?php echo $postcode;?>"/>
                        <div id="postcode_desc"></div>                        
                    </td>
                </tr> 
                
                <tr>
                    <td>Contact Number * </td>
                    <td>                    
						<input type="text" name="contact_no" id="contact_no" data-required="true"  data-describedby="contact_no_desc" data-description="contact_no" value="<?php echo $contact_no;?>"/>
                        <div id="contact_no_desc"></div>                    	
                    </td>
                </tr>                                                
        
    		</table>
		</td>
	
		<td style="border:0;">    
			<table class="user_address">
                <tr>
                    <td colspan="2">
                        <strong>Shipping Address</strong>
						<input type="checkbox" name="same_as_billing" value="1" id="same_as_billing" /> Same as billing address
                    </td>
                </tr>
                <tr>
                    <td width="140px">First Name * </td>
                    <td>
                        <input type="text" name="ship_f_name" id="ship_f_name" data-required="true"  data-describedby="ship_f_name_desc" data-description="ship_f_name" value="<?php echo $ship_f_name;?>"/>
                    <div id="ship_f_name_desc"></div> 
                    </td>
                </tr>
                <tr>
                    <td>Last Name</td>
                    <td><input type="text" name="ship_l_name" value="<?php echo $ship_l_name;?>" id="ship_l_name" /></td>
                </tr> 
                
                <tr>
                    <td>Email *</td>
                    <td>
                    	<input type="text" name="ship_email" id="ship_email" data-required="true"  data-describedby="ship_email_desc" data-description="ship_email" value="<?php echo $email;?>" data-pattern="^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$" />
                        <div id="ship_email_desc"></div>  
                    </td>
                </tr>         
                
                <tr>
                    <td>Company Name</td>
                    <td><input type="text" name="ship_company_name" value="<?php echo $ship_company_name;?>" id="ship_company_name" /></td>
                </tr> 
                
                <tr>
                    <td>Address1 * </td>
                    <td>
						<input type="text" name="ship_address1" id="ship_address1" data-required="true"  data-describedby="ship_address1_desc" data-description="ship_address1" value="<?php echo $ship_address1;?>"/>
                    <div id="ship_address1_desc"></div>                        
                    </td>
                </tr> 
                
                <tr>
                    <td>Address2</td>
                    <td>
						<input type="text" name="ship_address2" id="ship_address2" value="<?php echo $ship_address2;?>"/>                                                
                    </td>
                </tr>  
                
                <tr>
                    <td>Town/City * </td>
                    <td>
						<input type="text" name="ship_town_city" id="ship_town_city" data-required="true"  data-describedby="ship_town_city_desc" data-description="ship_town_city" value="<?php echo $ship_town_city;?>"/>
                    	<div id="ship_town_city_desc"></div>                                                 
                    </td>
                </tr> 
                
                <tr>
                    <td>Postcode * </td>
                    <td>
                    	<input type="text" name="ship_postcode" id="ship_postcode" data-required="true"  data-describedby="ship_postcode_desc" data-description="ship_postcode" value="<?php echo $ship_postcode;?>"/>
                    	<div id="ship_postcode_desc"></div>                        
                    </td>
                </tr> 
                
                <tr>
                    <td>Contact Number * </td>
                    <td>

						<input type="text" name="ship_contact_no" id="ship_contact_no" data-required="true"  data-describedby="ship_contact_no_desc" data-description="ship_contact_no" value="<?php echo $ship_contact_no;?>"/>
                    	<div id="ship_contact_no_desc"></div>                          
                        
                    </td>
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


<script src="/js/jquery-validate.js"></script>

<script>
	$( document ).ready(function() {


		$("#same_as_billing").click(function(){
			if($(this).is(':checked')) {
				$("#ship_f_name").val($("#f_name").val());
				$("#ship_l_name").val($("#l_name").val());
				$("#ship_email").val($("#email").val());
				$("#ship_company_name").val($("#company_name").val());
				$("#ship_address1").val($("#address1").val());
				$("#ship_address2").val($("#address2").val());
				$("#ship_town_city").val($("#town_city").val());				
				$("#ship_postcode").val($("#postcode").val());
				$("#ship_contact_no").val($("#contact_no").val());				
			} 
		});		
	});
	

	$('#ship_bill').validate({
	
		description : {
			f_name : {
				required : '<div class="alert alert-error">First name is required</div>',
			},
			email : {
				required : '<div class="alert alert-error">Email is required</div>',
				pattern : '<div class="alert alert-error">Please enter valid email</div>'
			},		
			
			address1 : {
				required : '<div class="alert alert-error">Address is required</div>',
			},
			town_city : {
				required : '<div class="alert alert-error">Town/City is required</div>',
			},
			postcode : {
				required : '<div class="alert alert-error">Postcode is required</div>',
			},
			contact_no : {
				required : '<div class="alert alert-error">Contact No. is required</div>',
			},
			
			ship_f_name : {
				required : '<div class="alert alert-error">First name is required</div>',
			},
			ship_email : {
				required : '<div class="alert alert-error">Email is required</div>',
				pattern : '<div class="alert alert-error">Please enter valid email</div>'
			},
			ship_address1 : {
				required : '<div class="alert alert-error">Address is required</div>',
			},
			ship_town_city : {
				required : '<div class="alert alert-error">Town/City is required</div>',
			},
			ship_postcode : {
				required : '<div class="alert alert-error">Postcode is required</div>',
			},
			ship_contact_no : {
				required : '<div class="alert alert-error">Contact No. is required</div>',
			}			

		}
	});

	
</script>