<?php
$this->Html->addCrumb('Artists', '/Artists/lists');
$this->Html->addCrumb('Profile', $this->here);
?>
<div class="contents_product group">
    <div class="product_user" ">
    <?php if (!$profileimage) { ?>
      <img  src="<?php echo $this->base; ?>/img/avatar.png">
    <?php } else { ?>
      <img style="width:150px; height: 150px;" src="<?php echo $profileimage; ?>" alt="profilePic" />
    <?php } ?>
    </div>
<div id="content_product">

    <h2 style="padding-bottom: 3px"><?php echo $user['User']['first_name'] . ' ' . $user['User']['last_name']; ?></h2>
    <h2 style="padding-bottom: 5px"><?php echo $user['User']['age']; ?> years of age</h2>
    <div class="add"><!--<span class="address"></span>--><span class="add_para"><?php echo $user['User']['address']; ?></span></div>
    <div class="para" style="margin-left: 0;"><span class="bio">Inspired by:&nbsp;</span><?php echo $user['User']['inspired']; ?></div>
    <div class="para" style="margin-left: 0;"><span class="bio">Bio:&nbsp;</span><?php echo $user['User']['about']; ?></div>
</div>
</div>

<h1 class="more_title">Artist's Collection</h1>
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
        <div id="profile_details"class="products_others">
            <img src="<?php echo $images; ?>" alt="iphone"  class="" />
            <h2><?php echo $this->Html->link($eachProduct['Product']['title'], array('action' => 'index', 'controller' => 'ProductDetails', $id)); ?></h2>
            <p><?php echo $this->Html->link($eachProduct['User']['first_name'] . ' ' . $eachProduct['User']['last_name'], array('action' => 'profile', 'controller' => 'Artists', $eachProduct['User']['username'])); ?>
            <p class="product_des"><?php echo $eachProduct['Product']['description']; ?></p>
            <p class="product_price">$ <?php echo $eachProduct['Product']['price']; ?></p>
        </div>
    <?php endforeach;
    ?>

</div>
