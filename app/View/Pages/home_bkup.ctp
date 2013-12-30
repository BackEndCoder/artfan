<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Pages
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
if (!Configure::read('debug')):
    throw new NotFoundException();
endif;
App::uses('Debugger', 'Utility');
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
<div class="meet-the-artist">
    <h3>Meet the Artist</h3>
    <ul class="main-col3">
        <?php foreach ($artists as $artist): ?>
            <?php
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
            <li><a href="#"> <img src="<?php echo $profile_image_url; ?>" width="237" height="177" alt="1" /></a>
                <div class="hide">
                    <h2><?php echo $artist['User']['first_name'] . ' ' . $artist['User']['last_name'] ?></h2>
                    <p><?php echo $artist['User']['about']; ?></p>
                    <span class="btn black"><?php echo $this->Html->link("more", array('action' => 'profile', 'controller' => 'Artists', $artist['User']['username'])); ?> </span>

                </div>

            </li>
        <?php endforeach; ?>
    </ul>    
</div>
<div class="product_top">
    <div class="product_main"><span class="items"> <span class="pink">Abstract</span>(60 items)</span></div>
    <div class="sorting">
        <div class="select">
            <form class="form-horizontal">
                <select class="form-control">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </form>

        </div>
        <div class="pagination_home">
            <ul class="">

                <li><a href="#" class="active">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#"><img width="18" height="16" alt="next" src="<?php echo $this->base; ?>/img/next.png"></a></li>
            </ul>

        </div>
    </div>
    <div class="clearfix"></div>
    <div class="inner_products">


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
                        <?php echo $this->Html->link($product['Product']['title'], array('action' => 'index', 'controller' => 'ProductDetails', $id)); ?>

                        <?php //echo $product['Product']['title']; ?>



                    </p>
                    <p class="product_des"><?php echo $product['Product']['description']; ?></p>
                    <p class="product_price">$ <?php echo $product['Product']['price']; ?></p>
                   <!-- <p class="product_cat"><?php echo $product['Category']['catname']; ?></p>
                    <p class="product_color"><?php echo $product['Color']['colorname']; ?></p>
                    <p class="product_style"><?php echo $product['Style']['stylename']; ?></p>-->
                </div>


            </div>
        <?php endforeach; ?>
    </div>
    <div class="clearfix"></div>
</div>
<div class="lower_pagination">
    <div class="view_page">
        <ul class="">

            <li>View Per Page</li>
            <li><a href="#">16</a></li>
            <li><a href="#">32</a></li>
            <li><a href="#">46</a></li>
        </ul>
    </div>
    <div class="pagination_lower">
        <ul class="">

            <li><a href="#" class="active">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#"><img width="18" height="16" alt="next" src="<?php echo $this->base; ?>/img/next.png"></a></li>
        </ul>
    </div>
</div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<link rel="stylesheet" href="<?php echo $this->base; ?>/css/nivo-slider.css" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo $this->base; ?>/js/jquery.nivo.slider.js"></script>
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
</script>




