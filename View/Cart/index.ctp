<?php
$this->Html->addCrumb('Cart', $this->here);
?>
<?php
$total = 0;
?>

<form method="post" action="/cart/updateCart">

<div class="left_cart">
    <h2 class="cart_icon">Shopping Bag</h2>
    <img src="<?php echo $this->base; ?>/img/cart.png" width="" height="" alt="shopping cart" />
</div>
<div class="cart_link">
    <ul>
        <li><a href="<?php echo Router::url(array('controller'=>'art','action'=>'index')); ?>">Continue Shopping</a></li>
        <li><a href="<?php echo Router::url(array('controller'=>'cart','action'=>'checkout')); ?>" class="pink_link">Next</a></li>
    </ul>
</div>
<table class="align">
    <thead>
        <tr class="cart_heading">
            <th>Art</th>
            <th>Description</th>
            <th>Price&nbsp;(&pound;)</th>
            <th>Quantity</th>
            <th>Total&nbsp;(&pound;)</th>
        </tr>
        <tr>

        </tr>
            <td colspan="5"></td>

        </tr>
    </thead>

    <tbody>
<?php foreach ($data as $array_key => $data): ?>
<?php foreach ($data as $data): ?>
        <tr>
            <td class="title_art"><?php echo $data[$array_key]['title']; ?></td>
            <td style="text-align:left;"><?php echo $data[$array_key]['description']; ?></td>
            <td ><span class="price_box"><?php echo $data[$array_key]['price']; ?></span></td>
            <td>
				<span class="price_box">
					<input type="text" name="prodQty[<?php echo $array_key; ?>][]" value="<?php echo $data['quantity']; ?>" style="width:50px;" />
					<input type="hidden" name="prodId[<?php echo $array_key; ?>][]" value="<?php echo $data[$array_key]['id']; ?>"  />
				</span>
			</td>            
            <td><span class="price_box"><?php echo $data[$array_key]['price']*$data['quantity']; ?></td>
            <?php $total+= $data[$array_key]['price']*$data['quantity']; ?>
        </tr>
<?php endforeach; ?>
<?php endforeach; ?>
		<tr>
			<td colspan="5" style="text-align: right;"><input type="submit" name="update_cart" value="Update Cart" id="cart_submit"></td>
		</tr>
<tr class="no_border"><td colspan="5"></td></tr>
<tr class="bg">
    <td colspan="3" class="grands" style="text-align: center;">If You have promotion code,you will able to enter it later</td>
    <td class="grand" style="text-align: right;">Grand Total</td>
    <td><span class="price_box"><?php echo $total; ?></span></td>
</tr>
<tr class="no_border"><td colspan="5"></td></tr>
<tr class="bg1">
    <td colspan="1" class="" style="text-align: left;"><h2>SHOP ONLINE WITH CONFIDENCE</h2></td>
    <td colspan="1" class="" style="text-align: left;">
        <ul>
            <li>Shipping Cost and Delivery Times</li>
            <li>Privacy and Security</li>
            <li>Easy Returns to our stores or by mail</li>
            
        </ul>
    </td>
    <td colspan="3"><a href="<?php echo Router::url(array('controller'=>'cart','action'=>'checkout')); ?>" class="pink_link">Next</a></td>
</tr>
</tbody>
</table>

</form>