<?php
$this->Html->addCrumb('Giftcards', $this->here);
?>
<div>
    <h3>Gift Vouchers</h3>
    <div class="content-container">
        <?php echo $this->Html->image('VOUCHER-V1.jpg', array('alt' => 'Gift Voucher')); ?>
        <div>

            <div class="gift-desc"><p>
                <h4>Art Gift Vouchers</h4>
                We're delighted to announce that you can now buy art gift tokens, to be redeemed against any original
                art and limited edition prints on <?php $this->Html->link('ArtFan.co.uk', $this->web_root) ?>.<br />
                <ul>
                    <li>Now you can give original art to friends, family and colleagues without worrying if they will like it!</li>
                    <li>Choice of over 0000 artworks from over  0000 artists</li>
                    <li>Perfect for birthday presents, wedding presents, leaving presents, Christmas presents ... you name it</li>
                </ul>
            </p></div>

            <div class="gift-desc"><p>How to buy
                Just choose your voucher below. Add as many vouchers as you like to make up the amount you want.
                    Once paid, you'll receive your voucher certificate by email (for immediate use) and a smart, highly
                    giftable, printed version by post. The voucher is presented in a high quality card inscribed with
                    our favourite art quote (see right for picture). Your lucky recipient can then redeem the voucher
                    against any of our thousands of artworks and prints. Simple!
                </p></div>

            <div class="gift-form">
                <form method="post" action="/Giftcards/index">
                    <label for="giftcard">Voucher amount</label>
                <select name="giftcard" id="giftcard">
                <?php
                    foreach ($giftcard as $i){ ?>
                    print_r($i);
                      <option value="<?php echo $i['Product']['id']; ?>">£<?php echo number_format($i['Product']['price']); ?></option>
               <?php } ?>
               </select>
               <br />
               <label for="note">Add a personal note</label>
               <input type="text" value="" name="note" id="note" />
               <label for="send">Add to basket</label>
               <input type="Submit" value="Add >>" id="send" name="send" />
               <form>
           </div>

            <div class="gift-desc">
                <p>
                    <h4>Important to know:</h4>
                <ul>
                    <li>Vouchers are valid for an entire year</li>
                    <li>Vouchers cannot be exchanged for cash</li>
                    <li>Delivery is free on all original artwork and we can deliver art anywhere within the UK</li>
                    <li>You can buy multiple vouchers in different amounts to make up the value you want to give</li>
                    <li>Vouchers come to you by post in a very smart, professionally designed card. The card is blank inside, for your own dedication.</li>
                </ul>
                </p>
            </div>
        </div>
    </div>
</div>