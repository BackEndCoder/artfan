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



