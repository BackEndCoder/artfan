<?php
    $this->Html->addCrumb('All Art', $this->here);
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
  
 
	

<div class="art index">
    <?php foreach ($art as $art): ?>
        <div class="art_details">
            <?php
            $id = $art['Art']['id'];
            $folder_url = WWW_ROOT . "/files/ArtImages/" . $id . "/";
            $http_url = $this->base . "/files/ArtImages/" . $id . "/";
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

                <p class="art_name">
				
				
                    
					
					
					
					
				<div class='popbox'> 
					<div class="myhoverlink">
						<?php echo $this->Html->link($art['Art']['title'], array('action' => 'view', 'controller' => 'art', $id)); ?>
						<div class='collapse'>
							<div class="pop_close"><img src="/img/close.png" style="width:20px; height: 20px;"></div>							
							<img src="<?php echo $images; ?>" style="width:280px; height: auto;"/>

							<div class="sep">
							<?php echo $this->Html->link($art['Art']['title'], array('action' => 'view', 'controller' => 'art', $id)); ?>
							</div>
							<p class="art_des"><?php echo $this->Text->truncate($art['Art']['description'], 50); ?></p>
			                <p class="art_price">&pound; <?php echo $art['Art']['price']; ?></p>
							
							
							<p>
							<br/>
							<a href="<?php echo $this->Html->url('/art/addToCart/') . $id; ?>" class="cart" style="color: #FFF;">Add To Cart</a> 
        					<a href="<?php echo $this->Html->url('/Wishlists/add/') . $id; ?>" class="wishlist" style="color: #FFF;">Wishlist</a>							
							</p>
						</div>    
					</div>  
				  </div>					
					
					
					
					
					

                    <?php //echo $art['Art']['title']; ?>



                </p>
                <p class="art_des"><?php echo $this->Text->truncate($art['Art']['description'], 50); ?></p>
                <p class="art_price">&pound; <?php echo $art['Art']['price']; ?></p>
               <!-- <p class="art_cat"><?php echo $art['Category']['catname']; ?></p>
                <p class="art_color"><?php echo $art['Color']['colorname']; ?></p>
                <p class="art_style"><?php echo $art['Style']['stylename']; ?></p>-->
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
