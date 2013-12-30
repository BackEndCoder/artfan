<?php
$this->Html->addCrumb('Giftcards', $this->here);
?>
<div>
    <h3>Gift Vouchers</h3>
    <div class="content-container">
        <?php echo $this->Html->image('VOUCHER-V1.jpg', array('alt' => 'Gift Voucher')); ?>
        <div>

            <div class="gift-desc"><p>Description goes here</p></div>
            <div class="gift-form">
                <form method="post" action="/Giftcards/index">
                <select name="giftcard" id="giftcard">
                <?php
                    foreach ($giftcard as $i){ ?>
                    print_r($i);
                      <option value="<?php echo $i['Product']['id']; ?>">£<?php echo number_format($i['Product']['price']); ?></option>
               <?php } ?>
               </select>
               <br />
               <input type="Submit" value="Add to cart" />
               <form>
               </table>
           </div>
        </div>
    </div>
</div>