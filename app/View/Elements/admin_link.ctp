<?php 
if ($this->Session->check('level')) {
	 if ($this->Session->read('level') == 1) {
?>
	<li style="padding-top: 1px;"><a href="<?php echo FULL_BASE_URL . '/Admin/'?>">Admin Menu</a></li>
<?php } else if ( $this->Session->read('level') == 2) {?>
	<li style="padding-top: 1px;"><a href="<?php echo FULL_BASE_URL . '/Admin/'?>">Artist Menu</a></li>
<?php }

} ?>