<?php
    $this->Html->addCrumb('All Products', $this->here);
?>

<style type='text/css' media='screen'>
	.collapse {
		display: none;
		background-color: #FFF;
		padding: 10px;
		padding-bottom: 20px;
		position: absolute;
		top: -80px;
		left: 50px;
		width: 280px;
		z-index: 100;
	}
	.popbox {
		position:relative;
	}
	.popbox a {
		font-family: 'HelveticaNeueCondensedBlack';
		color: #000;
	}
	.pop_close {
		position: absolute;
		right:0px;
		top:-10px;
		z-index: 100;
		width: 20px;
		height: 20px;
		cursor: pointer;
	}
	.sep {
		padding-top: 10px;
	}
	.clr {
		clear: both;
	}
  </style>
  
  
  <script type='text/javascript' charset='utf-8'>
    $(document).ready(function(){	  	  
		$( ".myhoverlink" ).bind( "mouseover", function() {	  		
			$('.collapse').hide();
			$( this ).find( "div.collapse" ).show();
			$( this ).find( "div.popup" ).css('z-index', '1');
			$( this ).find( "div.collapse" ).css('z-index', '99');			
			$( this ).find( "div.pop_close" ).css('z-index', '99');
		});		
		$(".pop_close").bind( "click", function(e) {	
			$(this).parent().hide();
		});					  	  	  
    });
  </script>  
  
 
	

<div class="products index">
    <?php foreach ($products as $product): ?>
        <div class="products_details">
            <?php
            $id = $product['Product']['id'];
            $folder_url = WWW_ROOT . "/files/ProductImages/" . $id . "/";
            $http_url = $this->base . "/files/ProductImages/" . $id . "/";
            $images = '';
            if (is_dir($folder_url) != 1) {
                
            } else {
                foreach (new DirectoryIterator($folder_url) as $fn) {
                    if ($fn->getFilename() != "." && $fn->getFilename() != ".." && !is_dir($folder_url . $fn->getFilename())) {
                        $images = $http_url . $fn->getFilename();
                        break;
                    }
                }
            }
            ?>
            <img src="<?php echo $images; ?>" alt="iphone"  class="" />
            <div class="inner_details">

                <p class="product_name">
				
				
                    
					
					
					
					
				<div class='popbox'> 
					<div class="myhoverlink">
						<?php echo $this->Html->link($product['Product']['title'], array('action' => 'view', 'controller' => 'products', $id)); ?>
						<div class='collapse'>
							<div class="pop_close"><img src="<?php echo $this->base . '/app/webroot/img/close.png';?>" style="width:20px; height: 20px;"></div>							
							<img src="<?php echo $images; ?>" style="width:280px; height: auto;"/>

							<div class="sep">
							<?php echo $this->Html->link($product['Product']['title'], array('action' => 'view', 'controller' => 'products', $id)); ?>
							</div>
							<p class="product_des"><?php echo $this->Text->truncate($product['Product']['description'], 50); ?></p>
			                <p class="product_price">&pound; <?php echo $product['Product']['price']; ?></p>
							
							
							<p>
							<br/>
							<a href="<?php echo $this->Html->url('/products/addToCart/') . $id; ?>" class="cart" style="color: #FFF;">Add To Cart</a> 
        					<a href="<?php echo $this->Html->url('/Wishlists/add/') . $id; ?>" class="wishlist" style="color: #FFF;">Wishlist</a>							
							</p>
						</div>    
					</div>  
				  </div>					
					
					
					
					
					

                    <?php //echo $product['Product']['title']; ?>



                </p>
                <p class="product_des"><?php echo $this->Text->truncate($product['Product']['description'], 50); ?></p>
                <p class="product_price">&pound; <?php echo $product['Product']['price']; ?></p>
               <!-- <p class="product_cat"><?php echo $product['Category']['catname']; ?></p>
                <p class="product_color"><?php echo $product['Color']['colorname']; ?></p>
                <p class="product_style"><?php echo $product['Style']['stylename']; ?></p>-->
            </div>


        </div>
    <?php endforeach; ?>
    <div style="clear: both;"></div>
    <div>
        <!-- Shows the page numbers -->
        <?php echo $this->Paginator->numbers(); ?>
        <!-- Shows the next and previous links -->
        <?php echo $this->Paginator->prev('Previous', null, null, array('class' => 'disabled')); ?>
        <?php echo $this->Paginator->next('Next', null, null, array('class' => 'disabled')); ?> 
        <!-- prints X of Y, where X is current page and Y is number of pages -->
        <?php echo $this->Paginator->counter(); ?>
    </div>
</div>
