<?php
echo $this->Form->create('Giftcard', array('type' => 'file', 'novalidate' => true));
?>
<fieldset>
    <legend>Add Giftcard<span class="arrowss1177"></span></legend>
    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link('List Art', array('action' => 'index')); ?></li>
        </ul>
    </div>
    <div class="clearfix"></div>
    <?php
		echo $this->Form->input('title', array('class' => 'clearfix'));
		echo '<div class="clr"></div>';				
		echo $this->Form->input('description', array('type' => 'textarea'));
		echo '<div class="clr"></div>';
		echo $this->Form->input('price');
		echo '<div class="clr"></div>';
		echo $this->Form->input('author', array('type' => 'hidden', 'value' => $current_user['id']));
		echo $this->Form->input('entered_on', array('type' => 'hidden', 'value' => date("Y/m/d")));
		echo $this->Form->input('category_id', array('type' => 'select', 'options' => $categories, 'empty' => '--Select--'));
		echo '<div class="clr"></div>';
		echo $this->Form->input('style_id', array('type' => 'select', 'options' => $styles, 'empty' => '--Select--'));
		echo '<div class="clr"></div>';		
		echo $this->Form->input('color_id', array('type' => 'select', 'options' => $colors, 'empty' => '--Select--'));
		echo '<div class="clr"></div>';		
		echo '<div class="input"><label for="GiftcardImages">Giftcard Image</label>';
    ?>    
	<input type="file" name="data[Giftcard][myimage][]" multiple="multiple" id="GiftcardImages">	
	<?php echo '</div>'; 	
	
	?>
</fieldset>
<?php echo $this->Form->end('Submit'); ?>


<script type='text/javascript' charset='utf-8'>
    $(document).ready(function(){	
		$( "#GiftcardAddForm" ).submit(function( event ) {
			var GiftcardTitle 		= $('#GiftcardTitle').val();
			var GiftcardDescription 	= $('#GiftcardDescription').val();
			var GiftcardPrice 		= $('#GiftcardPrice').val();				
			var GiftcardCategoryId	= $('#GiftcardCategoryId').val();
			var GiftcardStyleId			= $('#GiftcardStyleId').val();
			var GiftcardColorId			= $('#GiftcardColorId').val();			
			var img = $('#GiftcardImages').val();			
			if(
				GiftcardTitle!='' &&
				GiftcardDescription!='' &&
				GiftcardPrice!='' &&
				GiftcardCategoryId!='' &&
				GiftcardStyleId!='' &&
				GiftcardColorId!=''
			) {
				if(img=='') {
					alert('Image is empty');
					event.preventDefault();
				}				
			}
		});
	});
</script>
