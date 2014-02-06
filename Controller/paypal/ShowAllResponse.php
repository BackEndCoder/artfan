<?php
	if(isset($pay_suc) && $pay_suc==1) {
		/*$user_det = get_userdata( $row_uid['user_id'] );	
		$user_email = $user_det->data->user_email;		
		$to = $user_email;
		//$to = 'idreams.anil.shr@gmail.com';
		$subject = "Landlord Registration";	
		$message = "
		<html>
		<head>
		<title>Landload Registration</title>
		</head>
		<body>
		<p>Thank you for registering with us. Your registration is being processed by our website administration. We will inform you if our information department approve you.</p>
		</body>
		</html>
		";		
		// Always set content-type when sending HTML email
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";		
		// More headers
		$headers .= 'From: customerservice@pads247.info<customerservice@pads247.info>' . "\r\n";*/		
		//mail($to,$subject,$message,$headers);
		echo "<p>Thank you for your payment. Your detail transactions are as follow:</p>";	
	}
	else {
		echo "<p>Please confirm your payment. Your detail transactions are as follow:</p>";			
	}
?>      
 