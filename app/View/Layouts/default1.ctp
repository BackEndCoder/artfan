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
                <div class="header-right">
                    <ul class="header-cart">
                        <li><a href="#">Check</a></li>
                        <li><a href="#"><img src="<?php echo $this->base; ?>/img/shopping-cart.png" width="20" height="16" alt="shopping cart" /></a></li>
                        <li><a href="#">(0)</a></li>
                    </ul>
                    <div class="clr"></div>
                    <div class="phone">
                        <span>t:</span> 01234 567891

                    </div>
                </div>
            </header>

            <nav>
                <ul class="menu">
                    <li><a href="#">Home </a></li>
                    <li><a href="#">All Art </a></li>
                    <li><a href="#">Artists </a></li>
                    <li><a href="#">Be Inspired</a></li>
                    <li><a href="#">Gift Vouchers</a></li>
                    <li><a href="#">Wishlist</a></li>
                    <li><a href="#">Get in Touch</a></li>
                </ul>
                <div class="signup">
                    <ul>
                        <li><a href="#"> <img src="<?php echo $this->base; ?>/img/signup.png"  alt="signup " />Sign up</a></li>
                        <li><a href="#"> <img src="<?php echo $this->base; ?>/img/wishlist.png"  alt="wishlist" />Wishlist</a></li>
                        <li>
                            <?php if (isset($current_user)): ?>
                                <?php echo $this->Html->link('Logout', array('controller' => 'Users', 'action' => 'logout')); ?>
                            <?php else: ?>
                                <?php echo $this->Html->link('Login', array('controller' => 'Users', 'action' => 'login')); ?>
                            <?php endif; ?>                    
                    </ul>
                </div>
            </nav> <!--end nav section-->

            <div class="container">

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
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Shipping and Delivery</a></li>
                    </ul>
                </section>
                <section class="footer-box">
                    <ul>
                        <li><a href="#"> Meet the artist</a></li>
                        <li><a href="#">Styles</a></li>
                        <li><a href="#">Category</a></li>
                        <li><a href="#">Gift Voucher</a></li>
                        <li><a href="#">Sign-up</a></li>
                        <li><a href="#">Login</a></li>
                        <li><a href="#">Wishlist</a></li>
                    </ul>
                </section>
                <section class="footer-box">
                    <ul>
                        <li><a href="#"><h2>SIGN-UP now</h2> and start selling your work!</a></li>

                    </ul>
                </section>
                <section class="footer-box">
                    <h2>Follow us</h2>
                    <ul class="footer-social">
                        <li><a href="#"> <img src="<?php echo $this->base; ?>/img/faceboook.png" width="37" height="37" alt="facebook" /></a></li>
                        <li><a href="#"> <img src="<?php echo $this->base; ?>/img/twitter.png" width="38" height="37" alt="twitter" /></a></li>
                        <li><a href="#"> <img src="<?php echo $this->base; ?>/img/in.png" width="37" height="37" alt="in" /></a></li>
                        <li><a href="#"> <img src="<?php echo $this->base; ?>/img/googleplus.png" width="37" height="37" alt="google plus" /></a></li>
                    </ul>
                </section>

            </footer> <!--end footer-->
        </div>
        <?php echo $this->element('sql_dump'); ?>
    </body>
</html>
