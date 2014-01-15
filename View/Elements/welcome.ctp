<?php 
if ($this->Session->check('username')){
?>
	<li style="color: #e3007e;font: 14px 'HelveticaNeueRegular', Helvetica, Arial, sans-serif;padding-top: 5px;">Welcome <?php echo $this->Session->read('username'); ?>!&nbsp;</li>
<?php } ?>