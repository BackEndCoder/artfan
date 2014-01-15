<table>
	<tr>
		<td>SN</td>
		<td>Username</td>
		<td>Full Name</td>
		<td>Email</td>
		<td>Phone</td>		
		<td>Address</td>
		<td>Town/City</td>
		<td>Postcode</td>		
		<td>Payment Status</td>	
		<td>Operation</td>				
	</tr>
	
	<?php
		foreach($allorder as $ky=>$orderDetail) {

			echo '<tr>';
				echo '<td>';
					echo $ky+1;
				echo '</td>';
				echo '<td>';
					echo $orderDetail['order_detail']['user_name'];
				echo '</td>';
				echo '<td>';
					echo $orderDetail['order_detail']['ship_first_name']." ".$orderDetail['order_detail']['ship_first_name'];
				echo '</td>';
				echo '<td>';
					echo 'email@gmail.com';
				echo '</td>';
				echo '<td>';
					echo $orderDetail['order_detail']['ship_contact_no'];
				echo '</td>';
				echo '<td>';
					echo $orderDetail['order_detail']['ship_address1'];
				echo '</td>';	
				echo '<td>';
					echo $orderDetail['order_detail']['ship_town_city'];
				echo '</td>';
				echo '<td>';
					echo $orderDetail['order_detail']['ship_postcode'];
				echo '</td>';
				echo '<td>';
					echo $orderDetail['order_detail']['payment_status'];
				echo '</td>';
				echo '<td>';
					echo '<div>Detail</div>';
				echo '</td>';																								
			echo '</tr>';
			
		}	
	?>

</table>