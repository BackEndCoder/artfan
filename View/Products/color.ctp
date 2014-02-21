<?php
    $this->Html->addCrumb("Colors - " . $colorname, $this->here);
?>
<?php /*?>
<div class="breadcrumb">
    <ul>
        <li><a href=""><img src="<?php echo $this->base; ?>/img/home.png"></a></li>
        <li><a href="">&raquo;&nbsp;Category</a></li>
        <li><a href="">&raquo;&nbsp;<?php echo $colorname; ?></a></li>
    </ul>
</div>
<?php */if (count($products) > 0): ?>
    <div class="other_products group">
        
        <?php foreach ($products as $eachProduct): ?>
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
                <h2><?php echo $this->Html->link($eachProduct['Product']['title'], array('action' => 'index', 'controller' => 'ProductDetails', $id)); ?></h2>
                <p><?php echo $this->Html->link($eachProduct['User']['first_name'] . ' ' . $eachProduct['User']['last_name'], array('action' => 'profile', 'controller' => 'Artists', $eachProduct['User']['username'])); ?>
                <p class="product_des"><?php echo $eachProduct['Product']['description']; ?></p>
                <p class="product_price">$ <?php echo $eachProduct['Product']['price']; ?></p>
            </div>
        <?php endforeach; ?>
        
        <div class="more">
            <ul>
                <li><a href="">More</a></li>
                <li><a href=""><img width="18" height="16" src="<?php echo $this->base; ?>/img/next.png" alt="next"></a></li>
            </ul>

        </div>
    </div>
<?php endif; ?>