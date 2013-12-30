<?php 
/*
Dash board for admin
*/
?>
<?php $url = $_SERVER['REQUEST_URI'];
$id = substr( $url, strrpos( $url, '/' )+1 );

?>
<div class="row-fluid" id="space_admin">
  <div class="span6">
    <div class="widget stacked">
      <div class="widget-header"> <i class="icon-star"></i>
        <h3>WELCOME</h3>
      </div>
      <!-- /widget-header -->
      <div class="widget-content">
      <?php if ($current_user['role_id'] == 1) { ?>
            Welcome to the Admin menu!
            <?php } else { ?>
            Welcome to the Artist Admin menu!
            <?php }?>
      </div>
    </div>
  </div>
</div>