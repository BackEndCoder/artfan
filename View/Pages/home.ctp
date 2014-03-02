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

<?php
    $sliders = $this->requestAction('/sliders/getSliders/');
?>
<div class="banner">
    <div class="slider-wrapper theme-default">
        <div id="slider" class="nivoSlider">
            <?php foreach ($sliders as $slider): ?>
                <?php
                $folder_url = WWW_ROOT . "files/SliderImages/" . $slider['Slider']['id'] . "/";
                $http_url = $this->base . "/files/SliderImages/" . $slider['Slider']['id'] . "/";
                if (file_exists($folder_url)) {
                    foreach (new DirectoryIterator($folder_url) as $fn) {
                        if ($fn->getFilename() != "." && $fn->getFilename() != "..") {
                            $image_url = $http_url . $fn->getFilename();
                        }
                    }
                }
                ?>
                <a href="<?php echo $slider['Slider']['url']; ?>"><img src="<?php echo $image_url; ?>" width="754" height="314" alt="banner" /> </a>
            <?php endforeach; ?>
        </div>
    </div>
</div> <!--end banner-->
<?php
    $artists = $this->requestAction('/users/getArtists/');
?>
<div class="meet-the-artist">
    <h3 style="margin-left: 0">Meet the Artist</h3>
    <ul class="main-col3">
        <?php 
			$art_user_cnt = 1;
            shuffle($artists);
			foreach ($artists as $artist): ?>
            <?php
			
			if($art_user_cnt<=3) {
                if ($art_user_cnt == 2){
                    $style = 'style="margin-left:24px;margin-right:24px"';
                } else {
                    $style = 'style="margin-left:0px;margin-right:0px;"';
                }


            $profile_image_url = '';
            $folder_url = WWW_ROOT . "files/ProfileImages/" . $artist['User']['id'] . "/";
            $http_url = $this->base . "/files/ProfileImages/" . $artist['User']['id'] . "/";
            if (file_exists($folder_url)) {
                foreach (new DirectoryIterator($folder_url) as $fn) {
                    if ($fn->getFilename() != "." && $fn->getFilename() != "..") {
                        $profile_image_url = $http_url . $fn->getFilename();
                    }
                }
            }
            ?>
            <li <?php echo $style ?>><a href="#">
			<?php
				if(isset($profile_image_url) && !empty($profile_image_url)) {
				?>
					<img src="<?php echo $profile_image_url; ?>" width="237" height="177" alt="1" />
				<?php
				}
				else {
					$no_img_url = $this->base . "/files/ProfileImages/no_img.jpg";
				?>
					<img src="<?php echo $no_img_url;?>" width="235" height="175" style="border:1px solid #CCC;"/>
				<?php
				}
			?>
			
			</a>
                <div class="hide">
                    <h2><?php echo $artist['User']['first_name'] . ' ' . $artist['User']['last_name']; ?></h2>
                    <p>
						<?php 
							$artist_abt = $artist['User']['about'];
							if(strlen($artist_abt) > 50) {
								$artist_abt = substr($artist_abt, 0, 50).'...';
							}
							echo $artist_abt;
						?>
					</p>
                    <span class="btn black"><?php echo $this->Html->link("more", array('action' => 'profile', 'controller' => 'Artists', $artist['User']['username'])); ?> </span>

                </div>

            </li>
        <?php 
			$art_user_cnt++;
			}
			endforeach; ?>
    </ul>    
</div>
<h3>&nbsp;</h3>
<?php
    $new_artists = $this->requestAction('/users/getNewArtists/');
?>
<div class="meet-the-artist">
    <h3 style="margin-left: 0">Latest Artists</h3>
    <ul class="main-col3">
        <?php
        $art_user_cnt = 1;
        foreach ($new_artists as $artist): ?>
            <?php

            if($art_user_cnt<=3) {
                if ($art_user_cnt == 2){
                    $style = 'style="margin-left:24px;margin-right:24px"';
                } else {
                    $style = 'style="margin-left:0px;margin-right:0px;"';
                }

                $profile_image_url = '';
                $folder_url = WWW_ROOT . "files/ProfileImages/" . $artist['User']['id'] . "/";
                $http_url = $this->base . "/files/ProfileImages/" . $artist['User']['id'] . "/";
                if (file_exists($folder_url)) {
                    foreach (new DirectoryIterator($folder_url) as $fn) {
                        if ($fn->getFilename() != "." && $fn->getFilename() != "..") {
                            $profile_image_url = $http_url . $fn->getFilename();
                        }
                    }
                }
                ?>
                <li <?php echo $style; ?>><a href="#">
                        <?php
                        if(isset($profile_image_url) && !empty($profile_image_url)) {
                        ?>
                            <img src="<?php echo $profile_image_url; ?>" width="237" height="177" alt="1" />
                        <?php
                        }
                        else {
                            $no_img_url = $this->base . "/files/ProfileImages/no_img.jpg";
                            ?>
                            <img src="<?php echo $no_img_url;?>" width="235" height="175" style="border:1px solid #CCC;"/>
                        <?php
                        }
                        ?>

                    </a>
                    <div class="hide">
                        <h2><?php echo $artist['User']['first_name'] . ' ' . $artist['User']['last_name']; ?></h2>
                        <p>
                            <?php
                            $artist_abt = $artist['User']['about'];
                            if(strlen($artist_abt) > 50) {
                                $artist_abt = substr($artist_abt, 0, 50).'...';
                            }
                            echo $artist_abt;
                            ?>
                        </p>
                        <span class="btn black"><?php echo $this->Html->link("more", array('action' => 'profile', 'controller' => 'Artists', $artist['User']['username'])); ?> </span>

                    </div>

                </li>
                <?php
                $art_user_cnt++;
            }
        endforeach; ?>
    </ul>
</div>
<?php
    $art = $this->requestAction('/art/getArt/');
?>
<h3 style="margin-left: 0;">Recently Added</h3>
<div class="art_top" style="margin-left: 10px">
   <div class="art_main"></div>

    <div class="clearfix"></div>
    <div class="inner_art">

		<?php
			$mod = 1;
		?>
        <?php
        $i = 1;
        $spacing = array(2,3,6,7);
        foreach ($art as $art):
            if (in_array($i, $spacing)){
                $style = 'margin-left:4px; margin-right:4px; padding-bottom:10px;';
            } else {
                $style = 'margin-left:0px; margin-right:0px; padding-bottom:10px;';
            }
        ?>
            <div class="art_details" <?php echo $style ?>>
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

				<div class='popbox'> 
					<div class="myhoverlink">
						<?php echo $this->Html->link($art['Art']['title'], array('action' => 'view', 'controller' => 'art', $id)); ?>
						<div class='collapse'>
							<div class="pop_close"><img src="<?php echo $this->base . '/app/webroot/img/close.png';?>" style="width:20px; height: 20px;"></div>							
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

                    <p class="art_des"><?php echo $this->Text->truncate($art['Art']['description'], 50); ?></p>
                    <p class="art_price">&pound; <?php echo $art['Art']['price']; ?></p>
                   <!-- <p class="art_cat"><?php echo $art['Category']['catname']; ?></p>
                    <p class="art_color"><?php echo $art['Color']['colorname']; ?></p>
                    <p class="art_style"><?php echo $art['Style']['stylename']; ?></p>-->
                </div>
				

            </div>
			<?php
				if($mod%4==0) {
					echo '<div class="clr"></div>';
				}
				$mod++;
			?>
        <?php $i++;
        endforeach; ?>
    </div>
    <div class="clearfix"></div>
</div>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<link rel="stylesheet" href="<?php echo $this->base; ?>/css/nivo-slider.css" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo $this->base; ?>/js/jquery.nivo.slider.js"></script>
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
</script>




