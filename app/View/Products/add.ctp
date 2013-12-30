<?php echo $this->Form->create('Product', array('type' => 'file', 'novalidate' => true)); ?>
<fieldset>
    <legend>Add Product<span class="arrowss1177"></span></legend>
    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link('List Products', array('action' => 'index')); ?></li>
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
		echo '<div class="input"><label for="ProductImages">Product Image</label>';
    ?>    
	<input type="file" name="data[Product][myimage][]" multiple="multiple" id="ProductImages">	
	<?php echo '</div>'; 	
	
	?>
</fieldset>
<?php echo $this->Form->end('Submit'); ?>


<script type='text/javascript' charset='utf-8'>
    $(document).ready(function(){	
		$( "#ProductAddForm" ).submit(function( event ) {
			var ProductTitle 		= $('#ProductTitle').val();
			var ProductDescription 	= $('#ProductDescription').val();
			var ProductPrice 		= $('#ProductPrice').val();				
			var ProductCategoryId	= $('#ProductCategoryId').val();
			var ProductStyleId			= $('#ProductStyleId').val();
			var ProductColorId			= $('#ProductColorId').val();			
			var img = $('#ProductImages').val();			
			if(
				ProductTitle!='' &&
				ProductDescription!='' &&
				ProductPrice!='' &&
				ProductCategoryId!='' &&
				ProductStyleId!='' &&
				ProductColorId!=''
			) {
				if(img=='') {
					alert('Image is empty');
					event.preventDefault();
				}				
			}
		});
	});
</script>
