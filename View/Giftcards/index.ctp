<?php
$this->Html->addCrumb('Giftcards', $this->here);
?>
<div>
	<h3>Gift Vouchers</h3>
	<div class="content-container">
		<?php echo $this->Html->image('VOUCHER-V1.jpg', array('alt' => 'Gift Voucher')); ?>
		<div>
			<div class="gift-desc">
				<p>
					<h4 class="gift-title">Art gift vouchers</h4>
					We're delighted to announce that you can now buy art gift tokens, to be redeemed against any original
					art and limited edition prints on <?php $this->Html->link('ArtFan.co.uk', $this->Html->url('/')) ?>.<br />
					<ul>
						<li>Now you can give original art to friends, family and colleagues without worrying if they will like it!</li>
						<li>Choice of over 0000 artworks from over  0000 artists</li>
						<li>Perfect for birthday presents, wedding presents, leaving presents, Christmas presents ... you name it</li>
					</ul>
				</p>
			</div>
			<div class="gift-desc">
				<p>How to buy
							Just choose your voucher below. Add as many vouchers as you like to make up the amount you want.
									Once paid, you'll receive your voucher certificate by email (for immediate use) and a smart, highly
									giftable, printed version by post. The voucher is presented in a high quality card inscribed with
									our favourite art quote (see right for picture). Your lucky recipient can then redeem the voucher
									against any of our thousands of artworks and prints. Simple!
				</p>
			</div>
			<div class="gift-form">
			<h4 class="gift-title">Choose your voucher</h4>
			<?php echo $this->Form->create('Giftcard'); ?>
			<table>
				<tr>
					<td><label for="GiftcardId">Voucher amount:</label></td>
					<td>
						<?php
							echo $this->Form->input('Giftcard.id', array(
								'div' => false,
								'label' => false,
								'options' => $giftcards,
								'empty' => '(choose one)'
								));
						?>
					</td>
				</tr>
				<tr>
					<td><label for="GiftcardCodeNote">Add a personal note:</label></td>
					<td>
					<?php
						echo $this->Form->input('GiftcardCode.note', array(
							'div' => false,
							'label' => false,
							'type' => 'textarea',
							'cols' => 50,
							'rows' => 4
							));
					?>
					</td>
				</tr>
				<tr>
					<td><label for="GiftcardCodeSubmit">Add to basket:</label></td>
					<td><?php
						echo $this->Form->submit('Add >>',array('div'=>false,'id'=>'GiftcardCodeSubmit'));
					?>
					</td>
				</tr>
			</table>
			<?php
				echo $this->Form->end();
			?>
			</div>
			<div class="gift-desc">
				<p>
					<h4 class="gift-title">Important to know:</h4>
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