<?php
    $this->Html->addCrumb('Wishlists' , $this->here);
?>
<h2>Wish List</h2><br/>
<?php if (count($wishlists) == 0) { ?>
    <div id="wishlist-error">
        There's nothing in your wish list right now!
    </div>
<?php } ?>
<?php foreach ($wishlists as $wishlist): ?>
    <?php
    $id = $wishlist['Product']['id'];
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
    <div class="wish">
    <img src="<?php echo $images; ?>" alt="iphone"  class="" />
    <h2><?php echo $this->Html->link($wishlist['Product']['title'], array('action' => 'index', 'controller' => 'ProductDetails', $id)); ?></h2>

    <p class="product_des"><?php echo $wishlist['Product']['description']; ?></p>
    <a href="<?php echo $this->Html->url('/Wishlists/remove/') . $wishlist['Wishlist']['id']; ?>" class="remove">Remove</a> 
    </div>
<?php endforeach; ?>

