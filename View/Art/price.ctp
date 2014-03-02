<?php
    $this->Html->addCrumb("Price Range - " . $price_range, $this->here);
?>

<?php ?>
<?php /* ?>
<div class="breadcrumb">
    <ul>
        <li><a href=""><img src="<?php echo $this->base; ?>/img/home.png"></a></li>
        <li><a href="">&raquo;&nbsp;Category</a></li>
        <li><a href="">&raquo;&nbsp;<?php echo $catname; ?></a></li>
    </ul>
</div>
<?php */?>
<h3>Art by price (<?php echo $price_range; ?>)</h3>
<?php if (count($art) > 0): ?>
    <div class="other_art group">
        
        <?php foreach ($art as $eachArt): ?>
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
                <h2><?php echo $this->Html->link($eachArt['Art']['title'], array('action' => 'index', 'controller' => 'art', $id)); ?></h2>
                <p><?php echo $this->Html->link($eachArt['User']['first_name'] . ' ' . $eachArt['User']['last_name'], array('action' => 'profile', 'controller' => 'Artists', $eachArt['User']['username'])); ?>
                <p class="art_des"><?php echo $eachArt['Art']['description']; ?></p>
                <p class="art_price">$ <?php echo $eachArt['Art']['price']; ?></p>
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