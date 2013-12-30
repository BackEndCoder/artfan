<?php
	$this->start('header.block');
?>
<?php

	$res_view = $this->requestAction('/Header/getTotalCartPrice/');
	echo $res_view;
?>
<?php
	$this->end();
	echo $this->fetch('header.block');
?>

