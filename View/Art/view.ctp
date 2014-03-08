<?php
    $this->Html->addCrumb($art['Category']['catname'], '/art/category/'. $art['Category']['id']);
    $this->Html->addCrumb($art['Color']['colorname'], '/art/color/' . $art['Color']['id']);
    $this->Html->addCrumb($art['Style']['stylename'], '/art/style/' . $art['Style']['id']);
    $this->Html->addCrumb($art['Art']['title'] . ' by ' . $art['User']['first_name'] . ' ' . $art['User']['last_name'] , $this->here);
?>

<div  id="inner_art"class="art_details">
    <div class="images_details" align="center">
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
        <img src="<?php echo $images; ?>" alt="iphone"  class="" style="width: auto; height: auto;" />
    </div>
    <div id="details_inner" class="inner_details">
        <div class="inner_des">
            <h2><?php echo $art['Art']['title']; ?></h2>
            <p><?php echo $this->Html->link($art['User']['first_name'] . ' ' . $art['User']['last_name'], array('action' => 'profile', 'controller' => 'Artists', $art['User']['username'])); ?>
            <p class="art_des"><?php echo $art['Art']['description']; ?></p>
            <p class="art_cat"><?php echo $art['Category']['catname']; ?></p>
            <p class="art_color"><?php echo $art['Color']['colorname']; ?></p>
            <p class="art_style"><?php echo $art['Style']['stylename']; ?></p>

        </div>
        <p class="art_price">&pound; <?php echo $art['Art']['price']; ?></p>

        <a href="<?php echo $this->Html->url('/art/addToCart/') . $id; ?>" class="cart">Add To Cart</a> 
        <a href="<?php echo $this->Html->url('/Wishlists/add/') . $id; ?>" class="wishlist">Wishlist</a>

    </div>
    <div class="social">
        <!-- AddThis Button BEGIN -->
        <div class="addthis_toolbox addthis_floating_style addthis_counter_style" style="left:75px;top:50px;">
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
<div class="other_art group">
    <?php foreach ($userart as $eachArt): ?>
        <?php
        $id = $eachArt['Art']['id'];
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
        <div class="art_others">
            <img src="<?php echo $images; ?>" alt="iphone"  class="" />
            <h2><?php echo $this->Html->link($eachArt['Art']['title'], array('action' => 'view', 'controller' => 'art', $id)); ?></h2>
            <p><?php echo $this->Html->link($eachArt['User']['first_name'] . ' ' . $eachArt['User']['last_name'], array('action' => 'profile', 'controller' => 'Artists', $eachArt['User']['username'])); ?>
            <p class="art_des"><?php echo $eachArt['Art']['description']; ?></p>
            <p class="art_price">&pound; <?php echo $eachArt['Art']['price']; ?></p>
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