<?php
    $this->Html->addCrumb($product['Category']['catname'], '/products/category/'. $product['Category']['id']);
    $this->Html->addCrumb($product['Color']['colorname'], '/products/color/' . $product['Color']['id']);
    $this->Html->addCrumb($product['Style']['stylename'], '/products/style/' . $product['Style']['id']);
    $this->Html->addCrumb($product['Product']['title'] . ' by ' . $product['User']['first_name'] . ' ' . $product['User']['last_name'] , $this->here);
?>

<div  id="inner_product"class="products_details">
    <div class="images_details">
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
    </div>
    <div id="details_inner" class="inner_details">
        <div class="inner_des">
            <h2><?php echo $product['Product']['title']; ?></h2>
            <p><?php echo $this->Html->link($product['User']['first_name'] . ' ' . $product['User']['last_name'], array('action' => 'profile', 'controller' => 'Artists', $product['User']['username'])); ?>
            <p class="product_des"><?php echo $product['Product']['description']; ?></p>
            <p class="product_cat"><?php echo $product['Category']['catname']; ?></p>
            <p class="product_color"><?php echo $product['Color']['colorname']; ?></p>
            <p class="product_style"><?php echo $product['Style']['stylename']; ?></p>

        </div>
        <p class="product_price">&pound; <?php echo $product['Product']['price']; ?></p>

        <a href="<?php echo $this->Html->url('/products/addToCart/') . $id; ?>" class="cart">Add To Cart</a> 
        <a href="<?php echo $this->Html->url('/Wishlists/add/') . $id; ?>" class="wishlist">Wishlist</a>

    </div>
    <div class="social">
        <!-- AddThis Button BEGIN -->
        <div class="addthis_toolbox addthis_floating_style addthis_counter_style" style="left:50px;top:50px;">
            <a class="addthis_button_facebook_like" fb:like:layout="box_count"></a>
            <a class="addthis_button_tweet" tw:count="vertical"></a>
            <a class="addthis_button_google_plusone" g:plusone:size="tall"></a>
            <a class="addthis_counter"></a>
        </div>
        <script type="text/javascript">var addthis_config = {"data_track_addressbar": true};</script>
        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-519c72d34e0b7fa2"></script>
        <!-- AddThis Button END -->
    </div>
</div>

<!--<h1 class="more_title">More from this Artist</h1>-->
<div class="other_products group">
    <?php foreach ($userproducts as $eachProduct): ?>
        <?php
        $id = $eachProduct['Product']['id'];
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
        <div class="products_others">
            <img src="<?php echo $images; ?>" alt="iphone"  class="" />
            <h2><?php echo $this->Html->link($eachProduct['Product']['title'], array('action' => 'index', 'controller' => 'products', $id)); ?></h2>
            <p><?php echo $this->Html->link($eachProduct['User']['first_name'] . ' ' . $eachProduct['User']['last_name'], array('action' => 'profile', 'controller' => 'Artists', $eachProduct['User']['username'])); ?>
            <p class="product_des"><?php echo $eachProduct['Product']['description']; ?></p>
            <p class="product_price">&pound; <?php echo $eachProduct['Product']['price']; ?></p>
        </div>
    <?php endforeach;
    ?>

</div>
<div class="more">
    <ul>
        <li><a href="">More</a></li>
        <li><a href=""><img width="18" height="16" src="<?php echo $this->base; ?>/img/next.png" alt="next"></a></li>
    </ul>
    
</div>