<?php echo $this->Form->create('Art', array('type' => 'file', 'novalidate' => true)); ?>
<fieldset>
    <legend>Add Art<span class="arrowss1177"></span></legend>
    <div class="actions clearfix">

        <ul>
            <li><?php echo $this->Html->link('List Art', array('action' => 'index')); ?></li>
        </ul>
    </div>

    <input type="hidden" name="deletedImages" class="deletedImages" />

    <?php
    echo $this->Form->input('title', array('id' => 'input_type'));
	echo '<div class="clr"></div>';	
    echo $this->Form->input('description', array('id' => 'des_type'));
	echo '<div class="clr"></div>';	
    echo $this->Form->input('price', array('id' => 'price_type'));
	echo '<div class="clr"></div>';	
    echo $this->Form->input('author', array('type' => 'hidden', 'value' => $current_user['id']));
    echo $this->Form->input('modified_on', array('type' => 'hidden', 'value' => date("Y/m/d")));
    echo $this->Form->input('category_id', array('type' => 'select', 'options' => $categories, 'empty' => '--Select--'));
	echo '<div class="clr"></div>';	
    echo $this->Form->input('style_id', array('type' => 'select', 'options' => $styles, 'empty' => '--Select--'));
	echo '<div class="clr"></div>';	
    echo $this->Form->input('color_id', array('type' => 'select', 'options' => $colors, 'empty' => '--Select--'));
	echo '<div class="clr"></div>';	
    ?>
    <input type="file" name="data[Art][myimage][]" multiple="multiple" id="ArtImages">
    <?php
    if (!empty($imagesList)) {
        foreach ($imagesList as $image) {
            echo "<div>";
            echo "<img class='close' src='" . $this->base . "/img/close.png' alt='close' />";
            echo "<img class='artImage' src='" . $image . "' alt='artImage' width='80' />";

            echo "</div>";
        }
    }
    ?>
</fieldset>
<?php echo $this->Form->end('Submit'); ?>

<script type="text/javascript">
    $(document).ready(function() {
        $('.close').click(function() {
            var src = $(this).parent().find('.artImage').attr('src');
            src = src.split('\\')
            src = src[src.length - 1];
            if ($('.deletedImages').val() == "") {
                $('.deletedImages').val(src);
            }
            else {
                src = $('.deletedImages').val() + "," + src;
                $('.deletedImages').val(src);
            }

            $(this).parent().remove();

        });
		
		
		
		
		
		$( "#ArtEditForm" ).submit(function( event ) {
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