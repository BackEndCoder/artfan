<?php
/*
echo '<pre>';
print_r($products);
echo '</pre>';
*/
$total = 0;
?>

<h2>Your Shopping Cart</h2>
<table>
    <thead>
        <tr class="cart_heading">
            <th>Product</th>
            <th>Description</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total</th>
        </tr>
    </thead>

    <tbody>
<?php foreach ($products as $product): ?>
        <tr>
            <td><?php echo $product['Product']['title']; ?></td>
            <td><?php echo $product['Product']['description']; ?></td>
            <td><?php echo $product['Product']['price']; ?></td>
            <td><?php echo $product['Product']['Quantity']; ?></td>            
            <td><?php echo $product['Product']['price']*$product['Product']['Quantity']; ?></td>
            <?php $total+= $product['Product']['price']*$product['Product']['Quantity']; ?>
        </tr>


<?php endforeach; ?>
        <tr>
            <td colspan="4" class="grand" style="text-align: right;">Grand Total</td>
    <td><?php echo $total; ?></td>
</tr>
</tbody>
</table>