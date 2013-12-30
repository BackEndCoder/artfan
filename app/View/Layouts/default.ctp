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
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
$cakeDescription = __d('cake_dev', 'Artfan: Where the artists meet');
?>
<!DOCTYPE html>
<html>
    <head>
        <?php echo $this->Html->charset(); ?>
        <title>
            <?php echo $cakeDescription ?>:
            <?php echo $title_for_layout; ?>
        </title>
        <?php
        echo $this->Html->meta('icon');

        echo $this->Html->css('import');

        echo $this->Html->css('nivo-slider');

        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        ?>  
        <link rel="stylesheet" href="<?php echo $this->base; ?>/css/revised_style.css" />      
        <script type="text/javascript" src="<?php echo $this->base; ?>/js/jquery.1.9.1.min.js"></script>
        <script type='text/javascript' src='<?php echo $this->base; ?>/js/jquery.dcjqaccordion.2.7.min.js'></script>
        <script type="text/javascript" src="<?php echo $this->base; ?>/js/jquery.nivo.slider.js"></script>
        <script type="text/javascript">
            $(document).ready(function($) {
                $('#accordion').dcAccordion({
                    eventType: 'click',
                    autoClose: false,
                    saveState: false,
                    disableLink: false,
                    showCount: false,
                    speed: 'slow'
                });
            });
        </script>
    </head>
    <body>
        <div class="wrapper">
            <header>
                <div class="logo">
                    <h1><a href="<?php echo $this->Html->url('/'); ?>">Artfan</a></h1>
                </div>
				<style>
                    ul.header-cart li a {
                        font: 14px 'HelveticaNeueRegular', Helvetica, Arial, sans-serif;
                        color: #929497;
                        vertical-align: bottom;
                        margin-left: 10px;
                    }

				</style>
                <div class="header-right">
                    <ul class="header-cart">
                        <?php echo $this->element('welcome'); ?>
                        <?php echo $this->element('admin_link'); ?>
                        <li><a href="<?php echo $this->base;?>/ProductDetails/cart">View Cart&nbsp;<img style="padding-bottom: 2px;" src="<?php echo $this->base; ?>/img/shopping-cart.png" width="20" height="16" alt="shopping cart" />&nbsp;(&pound; <?php  echo $this->element('header'); ?>)</a></li>
                        <!--<li><a href="<?php echo $this->base;?>/ProductDetails/cart"><img style="padding-bottom: 4px;" src="<?php echo $this->base; ?>/img/shopping-cart.png" width="20" height="16" alt="shopping cart" /></a></li>
						<li><a href="<?php echo $this->base;?>/ProductDetails/cart">(&pound; <?php  echo $this->element('header'); ?>)</a></li>-->
                    </ul>
                    <div class="clr"></div>
                    <div class="phone">
                        <span>t:</span> 01234 567891
                    </div>
                </div>
            </header>

            <nav>
                <ul class="menu">
                    <li><a href="<?php echo $this->Html->url('/'); ?>">Home </a></li>
                    <li><?php echo $this->Html->link('All Art', array('plugin' => null,'controller' => 'Products', 'action' => 'all')); ?></li>
                    <li><?php echo $this->Html->link('Search', array('plugin' => null,'controller' => 'ProductDetails', 'action' => 'search')); ?></li>
                    <li><?php echo $this->Html->link('Artists', array('plugin' => null,'controller' => 'Artists', 'action' => 'lists')); ?></li>
                    <li><?php echo $this->Html->link('Be Inspired', array('plugin' => null,'controller' => 'Inspired', 'action' => 'index')); ?></li>
                    <li><?php echo $this->Html->link('Gift Vouchers', array('plugin' => null, 'controller' => 'Giftcards', 'action' => 'index')); ?></li>
					<?php /*<li><?php echo $this->Html->link('Wishlist', array('controller' => 'Wishlists', 'action' => 'index')); ?></li> */ ?>
                    <li><?php echo $this->Html->link('Get in Touch', '/contact'); ?></li>
                </ul>
                <div class="signup">
                    <ul>
                        <?php if (!isset($current_user)): ?>
                        <li><a href="<?php echo $this->Html->url('/Users/register'); ?>"> <img src="<?php echo $this->base; ?>/img/signup.png"  alt="signup " />Sign up</a></li>
                        <?php endif; ?>
                        <li><a href="<?php echo $this->Html->url('/WishLists'); ?>"> <img src="<?php echo $this->base; ?>/img/wishlist.png"  alt="wishlist" />Wishlist</a></li>
                        <li>
                            <?php if (isset($current_user)): ?>
                                <?php echo $this->Html->link('Logout', array('plugin' => null, 'controller' => 'Users', 'action' => 'logout')); ?>
                            <?php else: ?>
                                <?php echo $this->Html->link('Login', array('plugin' => null, 'controller' => 'Users', 'action' => 'login')); ?>
                            <?php endif; ?>                    
                    </ul>
                </div>
            </nav> <!--end nav section-->

            <div class="container">

                <style>
                    .breadcrumbs {
                        font:10px arial,sans-serif;
                        padding-left: 10px;
                        padding-bottom: 5px;
                    }
                </style>
                <div class="breadcrumbs">
                    You are here: <?php echo $this->Html->getCrumbs(' > ', 'Home');?>
                </div>

                <?php echo $this->element('sidebar'); ?>

                <?php echo $this->Session->flash(); ?>

                <div class="product_content">
                    <?php echo $this->fetch('content'); ?>
                </div>

            </div>
            <footer>
                <section class="footer-box">
                    <ul>
                        <li><a href="#">Customer Service</a></li>
                        <li><?php echo $this->Html->link('Contact', $this->base . '/contact')?></li>
                        <li><a href="#">Shipping and Delivery</a></li>
                    </ul>
                </section>
                <section class="footer-box">
                    <ul>
                        <li><a href="<?php echo $this->Html->url('/Artists/lists/')?>"> Meet the artist</a></li>
                        <li><a href="#">Styles</a></li>
                        <li><a href="#">Category</a></li>
                        <li><a href="http://idreamsuk.com/artfan/Pages/show/2">Gift Voucher</a></li>
                        <li><a href="<?php echo $this->Html->url('/Users/register/')?>">Sign-up</a></li>
                        <?php if ($this->Session->check('username')) { ?>
                            <li><a href="<?php echo $this->Html->url('/Users/logout/')?>">Logout</a></li>
                        <?php
                        } else { ?>
                            <li><a href="<?php echo $this->Html->url('/Users/login/')?>">Login</a></li>
                        <?php } ?>

                        <li><a href="<?php echo $this->Html->url('/WishLists')?>">Wishlist</a></li>
                    </ul>
                </section>
                <section class="footer-box">
                    <ul>
                        <li><a href="<?php echo $this->Html->url('/Users/register/')?>"><h2>SIGN-UP now</h2> and start selling your work!</a></li>

                    </ul>
                </section>
                <section class="footer-box">
                    <h2 class="footer_h2">Follow us</h2>
                    <ul class="footer-social">
                        <li><a href="http://www.facebook.com/"> <img src="<?php echo $this->base; ?>/img/faceboook.png" width="37" height="37" alt="facebook"  target="_blank"/></a></li>
                        <li><a href="https://twitter.com/" target="_blank"> <img src="<?php echo $this->base; ?>/img/twitter.png" width="38" height="37" alt="twitter" /></a></li>
                        <li><a href="http://www.linkedin.com/"> <img src="<?php echo $this->base; ?>/img/in.png" width="37" height="37" alt="in"  target="_blank"/></a></li>
                        <li><a href="https://plus.google.com/"> <img src="<?php echo $this->base; ?>/img/googleplus.png" width="37" height="37" alt="google plus"  target="_blank"/></a></li>
                    </ul>
                </section>

            </footer> <!--end footer-->
        </div>
    </body>
</html>
