<?php
define('FACEBOOK_APP_ID', '516249431745413');
define('FACEBOOK_SECRET', 'f7445f9a7333cba543579b8d4ff57023');

function parse_signed_request($signed_request, $secret) {
  list($encoded_sig, $payload) = explode('.', $signed_request, 2); 
  // decode the data
  $sig = base64_url_decode($encoded_sig);
  $data = json_decode(base64_url_decode($payload), true);
  if (strtoupper($data['algorithm']) !== 'HMAC-SHA256') {
    error_log('Unknown algorithm. Expected HMAC-SHA256');
    return null;
  }
  // check sig
  $expected_sig = hash_hmac('sha256', $payload, $secret, $raw = true);
  if ($sig !== $expected_sig) {
    error_log('Bad Signed JSON signature!');
    return null;
  }
  return $data;
}

function base64_url_decode($input) {
    return base64_decode(strtr($input, '-_', '+/'));
}

if (isset($_REQUEST['signed_request']) && !empty($_REQUEST['signed_request'])) {

	$response 				= parse_signed_request($_REQUEST['signed_request'], FACEBOOK_SECRET);	  

	$user_login 			= $fb_login = 'FB-'.$response['user_id'];

	$ll_password 			= $fb_password = $response['registration']['password'];

	$fb_full_name = $response['registration']['name'];

	list($fb_fisrt_name, $fb_last_name) = explode(' ', $fb_full_name);	

	$ll_firstname 			= $fb_fisrt_name;

	$ll_lastname			= $fb_last_name;

	$user_email				= $fb_email = $response['registration']['email'];	

	$ll_address1			= $fb_address1 = $response['registration']['location']['name'];  

	$ins_user = "INSERT INTO wp_users

	(user_login, user_pass, user_nicename, user_email, user_registered, display_name)

	VALUES

	('".$user_login	."', '".md5($ll_password)."', '".$ll_firstname."', '".$user_email."', '".date('Y-m-d h:m:s')."', '".$ll_firstname."')";

	$res_user = mysql_query($ins_user);

	$user_id = mysql_insert_id();	

	$ins_user_meta = "

			INSERT INTO wp_usermeta

			(user_id, meta_key, meta_value)

			VALUES				

			('".$user_id."', 'wp_capabilities', 'a:3:{s:9:\"is_locked\";b:1;s:21:\"failed_login_attempts\";a:0:{}s:6:\"editor\";b:1;}'),			 											
			('".$user_id."', 'theme_my_login_security', 'a:2:{s:9:\"is_locked\";b:1;s:21:\"failed_login_attempts\";a:0:{}}'), 			

			('".$user_id."', 'wp_user_level', '1'),									

			('".$user_id."', 'first_name', '".$ll_firstname."'), 

			('".$user_id."', 'last_name', '".$ll_lastname."'),		

			('".$user_id."', 'address1', '".$ll_address1."')									

	";

		

	$_SESSION['ll_user_id'] = $user_id;

	$res_user_meta = mysql_query($ins_user_meta);					

	    	

} 

else {

	//echo 'Facebook Returns Empty Data.';

}



if(isset($_POST['wp-submit']) && !empty($_POST['wp-submit'])) {

	$ll_firstname 			= $_POST['ll_firstname'];

	$ll_lastname 			= $_POST['ll_lastname'];

	$user_login				= $_POST['user_login'];

	$user_email				= $_POST['user_email'];	

	$ll_password			= $_POST['ll_password'];

	$ll_password_again		= $_POST['ll_password_again'];	

	$ll_phone 				= $_POST['ll_phone'];

	$ll_address1 			= $_POST['ll_address1'];

	$ll_address2			= $_POST['ll_address2'];

	$ll_postcode			= $_POST['ll_postcode'];	

	$ll_town_city			= $_POST['ll_town_city'];	


	$ins_user = "INSERT INTO wp_users
	(user_login, user_pass, user_nicename, user_email, user_registered, display_name)
	VALUES
	('".$user_login	."', '".md5($ll_password)."', '".$ll_firstname."', '".$user_email."', '".date('Y-m-d h:m:s')."', '".$ll_firstname."')";
	$res_user = mysql_query($ins_user);
	
	$user_id = mysql_insert_id();
	
	$ins_user_meta = "

			INSERT INTO wp_usermeta

			(user_id, meta_key, meta_value)

			VALUES				

			('".$user_id."', 'wp_capabilities', 'a:3:{s:9:\"is_locked\";b:1;s:21:\"failed_login_attempts\";a:0:{}s:6:\"editor\";b:1;}'),
			
			('".$user_id."', 'theme_my_login_security', 'a:2:{s:9:\"is_locked\";b:1;s:21:\"failed_login_attempts\";a:0:{}}'), 			

			('".$user_id."', 'wp_user_level', '1'),									

			('".$user_id."', 'first_name', '".$ll_firstname."'), 

			('".$user_id."', 'last_name', '".$ll_lastname."'),

			('".$user_id."', 'phone', '".$ll_phone."') 			

			".$ins_service.",			

			('".$user_id."', 'address1', '".$ll_address1."'), 

			('".$user_id."', 'address2', '".$ll_address2."'), 	

			('".$user_id."', 'post_code', '".$ll_postcode."'), 

			('".$user_id."', 'town_city', '".$ll_town_city."')
	";

	$_SESSION['ll_user_id'] = $user_id;

	$res_user_meta = mysql_query($ins_user_meta);		

}

?>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jquery.validator.js"></script>

<style type="text/css">

	* { font-family: Verdana; font-size: 96%; }

	label { width: 10em; float: left; }

	label.error { float: none; color: red; padding-left: .5em; vertical-align: top; }

	p { clear: both; }

	.submit { margin-left: 12em; }

	em { font-weight: bold; padding-right: 1em; vertical-align: top; }

</style>

<script>

$(document).ready(function(){

	//$("#commentForm").validate();		

	$('#registerform').validate({

	});				

});

</script> 



<form name="registerform" id="registerform" action="<?php echo site_url();?>/register-step3" method="post">

  <div class="reg_extra"> <br>

    <br>

    <h3>MemberShip Type *</h3>



    <table style=" padding-top: 5px; display: inline-block;">

    	<tr>

        	<td width="180px" >
            	<label for="membership_type"> Membership *</label>
            </td>
            <td>

            	<select name="membership_type" id="membership_type" class="required">

                	<option value="">Select Membership Type</option>

                	<option value="0">Free Registration £0.00</option>

                	<option value="99">Let Only £99.00</option>                    

                	<option value="299">Fully Managed £299.00</option>                                        

                </select>

            </td>

        </tr>

    </table>

    

  </div>  

  

  <!-------------------- Extra ------------------------------->

  <div class="clr"></div>
  <div class="reg_extra" style="display: block;" id="reg_extra"> <br>
    <br>
    <h3>Charges</h3>
    <table class="tbl_extra_charge">
      <tbody>
        <tr>

          <td class="charge_col1"> (EPC) (UK Legal requirement for rental properties) </td>

          <td class="charge_col2">

          	<select name="EPC_legal_requirement" id="EPC_legal_requirement">

              <option value="1">Pads247 to organise for £70</option>

              <option value="2">Already have one</option>

              <option value="3">I will get another supplier to organise one</option>

            </select></td>

        </tr>

        <tr>

          <td class="charge_col1"> Gas Safety Certificate? (UK Legal requirement for rental properties) </td>

          <td class="charge_col2">

          <select name="gas_safety_certificate" id="gas_safety_certificate">

              <option value="1">Pads247 to organise for £55 </option>

              <option value="2">Already have one</option>

              <option value="3">I will get another supplier to organise one</option>

              <option value="4">This property has no gas</option>

          </select>

          </td>

        </tr>
      </tbody>
    </table>
    <br>
    <br>
    <h3>Additional Services</h3>
    <p class="add_serv">Which services are you interested in?</p>
    <table class="tbl_extra_charge">
      <tbody>

        <tr>

          <td><input type="checkbox" value="55" name="service[]"></td>

          <td>Gas Safety Certificate </td>

          <td>£<span class="thisprice">55</span> </td>

        </tr>

        <tr>

          <td><input type="checkbox" value="70" name="service[]"></td>

          <td>EPC </td>

          <td>£<span class="thisprice">70</span> </td>

        </tr>

        <tr>

          <td><input type="checkbox" value="120" name="service[]"></td>

          <td>Electrical Safety Certificate</td>

          <td>£<span class="thisprice">120</span> </td>

        </tr>

        <tr>

          <td><input type="checkbox" value="99" name="service[]"></td>

          <td>Rental Guarantee Insurance (for a 6 month policy) * </td>

          <td>£<span class="thisprice">99</span> </td>

        </tr>       

      </tbody>
    </table>

  </div>
  
  
  
  <script language="javascript">

      $('#membership_type').change(function() {
			if($(this).val() == 299) {
				//$('#reg_extra').hide();
				$("#EPC_legal_requirement option[value='2']").attr("selected", "selected");
				$("#gas_safety_certificate option[value='2']").attr("selected", "selected");
			}
			else { 
				//$('#reg_extra').show();
			}
      });

  </script>

  <!-------------------- Extra ------------------------------->

  <p>

  	<input type="hidden" name="user_id" value="<?php echo $user_id; ?>" />

    <input type="submit" name="wp-submit" id="wp-submit" value="Register Step3 &raquo;">

  </p>

  <div class="clr"></div>                

</form>   