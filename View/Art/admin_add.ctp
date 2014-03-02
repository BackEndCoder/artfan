<?php
echo $this->Form->create('Art', array('type' => 'file', 'novalidate' => true));
?>
<fieldset>
    <legend>Add Art<span class="arrowss1177"></span></legend>
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
		echo '<div class="input"><label for="ArtImages">Art Image</label>';
    ?>    
	<input type="file" name="data[Art][myimage][]" multiple="multiple" id="ArtImages">	
	<?php echo '</div>'; 	
	
	?>
</fieldset>
<?php echo $this->Form->end('Submit'); ?>


<script type='text/javascript' charset='utf-8'>
    $(document).ready(function(){	
		$( "#ArtAddForm" ).submit(function( event ) {
			var ArtTitle 		= $('#ArtTitle').val();
			var ArtDescription 	= $('#ArtDescription').val();
			var ArtPrice 		= $('#ArtPrice').val();				
			var ArtCategoryId	= $('#ArtCategoryId').val();
			var ArtStyleId			= $('#ArtStyleId').val();
			var ArtColorId			= $('#ArtColorId').val();			
			var img = $('#ArtImages').val();			
			if(
				ArtTitle!='' &&
				ArtDescription!='' &&
				ArtPrice!='' &&
				ArtCategoryId!='' &&
				ArtStyleId!='' &&
				ArtColorId!=''
			) {
				if(img=='') {
					alert('Image is empty');
					event.preventDefault();
				}				
			}
		});
	});
</script>
