<?php
/*
echo '<pre>';
print_r($art);
echo '</pre>';
*/
$total = 0;
?>

<h2>Your Shopping Cart</h2>
<table>
    <thead>
        <tr class="cart_heading">
            <th>Art</th>
            <th>Description</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total</th>
        </tr>
    </thead>

    <tbody>
<?php foreach ($art as $art): ?>
        <tr>
            <td><?php echo $art['Art']['title']; ?></td>
            <td><?php echo $art['Art']['description']; ?></td>
            <td><?php echo $art['Art']['price']; ?></td>
            <td><?php echo $art['Art']['Quantity']; ?></td>            
            <td><?php echo $art['Art']['price']*$art['Art']['Quantity']; ?></td>
            <?php $total+= $art['Art']['price']*$art['Art']['Quantity']; ?>
        </tr>


<?php endforeach; ?>
        <tr>
            <td colspan="4" class="grand" style="text-align: right;">Grand Total</td>
    <td><?php echo $total; ?></td>
</tr>
</tbody>
</table>