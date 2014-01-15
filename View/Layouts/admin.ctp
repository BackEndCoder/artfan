<?php
$cakeDescription = __d('cake_dev', 'Artfan: Where the artists meet');
?>
<!DOCTYPE html>
<html>
    <head>
        <?php echo $this->Html->charset(); ?>
        <title>
            <?php echo $cakeDescription ?>:
            <?php echo $title_for_layout; ?>
        </title>
        <?php
        echo $this->Html->meta('icon');

        echo $this->Html->css('import');

        echo $this->Html->css('nivo-slider');

        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        ?>  
        <link href="<?php echo $this->base; ?>/css/style_admin.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="<?php echo $this->base; ?>/css/bootstrap.css" /> 
        <link rel="stylesheet" href="<?php echo $this->base; ?>/css/admin.css" /> 
        <link rel="stylesheet" href="<?php echo $this->base; ?>/css/font-awesome.min.css" /> 
        <script type="text/javascript" src="<?php echo $this->base; ?>/js/jquery.1.9.1.min.js"></script>
        <script type="text/javascript" src="<?php echo $this->base; ?>/js/bootstrap.js"></script>
        <script type="text/javascript" src="<?php echo $this->base; ?>/js/jquery-ui-1.10.0.custom.min.js"></script>

    </head>
    <body>
        <div class="body_main">
            <div class="container">
                <div class="navbar navbar-inverse navbar-fixed-top">
                    <div class="navbar-inner">
                        <div class="container">
                            <div class="row-fluid">
                                <div class="span6"> <a class="img" href="#"> <img src="<?php echo $this->base; ?>/img/fo.png"/></a> </div>
                                <div class="span6">
                                    <div class="nav-collapse collapse">
                                        <ul class="nav pull-right">
                                        <li><?php echo $this->Html->link("Main Site", Router::url('/')); ?></li>
                                        <li><?php echo $this->Html->link('Logout', array('controller' => 'users', 'action' => 'logout')); ?></li>

                                            <!-- REMOVED
                                             <i class="icon-cog"></i>
                                            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Settings <b class="caret"></b> </a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="javascript:;">Account Settings</a></li>
                                                    <li><a href="javascript:;">Privacy Settings</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="javascript:;">Help</a></li>
                                                </ul>
                                            </li>
                                            REMOVED -->


                                            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-cog" style="display: inline;margin-right: 0px;"> Settings</i><?php /*echo $current_user['first_name'];*/ ?> <b class="caret"></b> </a>

                                                <ul class="dropdown-menu">

                                                    <li><?php echo $this->Html->link("My Profile",array('controller'=>'Users', 'action'=>'profile')); ?></li>
                                                    <li><?php echo $this->Html->link("Change Password",array('controller'=>'Users', 'action'=>'changepassword')); ?></li>
                                                </ul>
                                            </li>

                                        </ul>
                                    </div>
                                    <!--/.nav-collapse --> 
                                </div>
                            </div>
                        </div>
                        <!-- /container --> 
                    </div>
                    <!-- /navbar-inner -->
                </div>
                <!-- /navbar -->

                <?php
                $url = $_SERVER['REQUEST_URI'];
                $id = substr($url, strrpos($url, '/') + 1);
                ?>
                <div class="subnavbar">
                    <div class="subnavbar-inner">
                        <div class="container"> <a class="btn-subnavbar collapsed" data-toggle="collapse" data-target=".subnav-collapse"> <i class="icon-reorder"></i> </a>
                            <div class="subnav-collapse">
                                <ul class="mainnav">
                                    <?php if (($id) == 'admin') { ?><li class="active"><?php } else { ?><li><?php } ?><a href="<?php echo $this->base; ?>/admin"> <i class="icon-home"></i> <span>Home</span> </a> </li>

                                    <?php if ($current_user['role_id'] == 1 || $current_user['role_id'] == 2): ?>
                                        <?php if (($id) == 'products') { ?><li class="active"><?php } else { ?><li><?php } ?> <a href='<?php echo $this->base; ?>/products'> <i class="icon-copy"></i> <span>Product</span> </a> </li>
                                    <?php endif; ?>
                                    <?php if ($current_user['role_id'] == 1): ?>
                                            <?php if (($id) == 'Categories') { ?><li class="active"><?php } else { ?><li><?php } ?> <a href='<?php echo $this->base; ?>/Categories' class=""> <i class="icon-external-link"></i> <span>Categories</span> </a> </li>
                                            <?php if (($id) == 'Colors') { ?><li class="active"><?php } else { ?><li><?php } ?> <a href='<?php echo $this->base; ?>/Colors' class=""> <i class="icon-external-link"></i> <span>Colors</span> </a> </li>
                                            <?php if (($id) == 'Styles') { ?><li class="active"><?php } else { ?><li><?php } ?> <a href='<?php echo $this->base; ?>/Styles' class=""> <i class="icon-external-link"></i> <span>Styles</span> </a> </li>
                                            <?php if (($id) == 'Users') { ?><li class="active"><?php } else { ?><li><?php } ?> <a href='<?php echo $this->base; ?>/Users' class=""> <i class="icon-external-link"></i> <span>Users</span> </a> </li>
                                            <?php if (($id) == 'Testimonials') { ?><li class="active"><?php } else { ?><li><?php } ?> <a href='<?php echo $this->base; ?>/Testimonials' class=""> <i class="icon-external-link"></i> <span>Testimonials</span> </a> </li>
                                            <?php if (($id) == 'Sliders') { ?><li class="active"><?php } else { ?><li><?php } ?> <a href='<?php echo $this->base; ?>/Sliders' class=""> <i class="icon-external-link"></i> <span>Sliders</span> </a> </li>
                                            <?php if (($id) == 'Pages') { ?><li class="active"><?php } else { ?><li><?php } ?> <a href='<?php echo $this->base; ?>/Pages' class=""> <i class="icon-external-link"></i> <span>Pages</span> </a> </li>
                                            <?php if (($id) == 'Newsletters') { ?><li class="active"><?php } else { ?><li><?php } ?> <a href='<?php echo $this->base; ?>/Newsletters' class=""> <i class="icon-external-link"></i> <span>Newsletters</span> </a> </li>
                                    <?php endif; ?>

                                </ul>
                            </div>
                            <!-- /.subnav-collapse --> 

                        </div>
                        <!-- /container --> 

                    </div>
                    <!-- /subnavbar-inner --> 

                </div>
                <!-- /subnavbar -->
                <!-- Content Start Here (row-fluid) -->
                <div class="row-fluid" id="bg_content1">

                    <?php echo $this->Session->flash(); ?>

                    <?php echo $this->fetch('content'); ?>

                </div>
                <!-- Content End Here (row-fluid) -->


                <div class="clearfix"></div>
                <div class="row-fluid inner_footer" id="footer">
                    <div class="span8">
                        <span>Artfan &copy; 2013 All Right Reserved</span>
                    </div>
                    <div class="span3 float_right" id="image_logo">
                        <a href="#"></a>
                    </div>

                    <!-- end of inner_footer-->
                </div>
            </div>
            <?php echo $this->element('sql_dump'); ?>
        </div>
        
        <?php echo $this->element('sql_dump'); ?>

    </body>
</html>
