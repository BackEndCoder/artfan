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
	if(isset($_POST['submit']) && $_POST['submit'] == 'Next') {
		include_once('payform.php');
	}
	else {
		include_once('checkoutform.php');	
	}
?>


