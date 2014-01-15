<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
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
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        
        <link rel="stylesheet" href="<?php echo $this->base; ?>/css/admin.css" />  
        <link href="<?php echo $this->base; ?>/css/bootstrap.css" rel="stylesheet">
        <link href="<?php echo $this->base; ?>/css/bootstrap-responsive.css" rel="stylesheet">
        <link href="<?php echo $this->base; ?>/css/css.css" rel="stylesheet">
        <link href="<?php echo $this->base; ?>/icon/font-awesome.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>   
        <script type="text/javascript" src="<?php echo $this->base; ?>/js/jquery.1.9.1.min.js"></script>
        
        
        
    </head>
    <body>
    




      

    <header class="dark_grey"> <!-- Header start -->
        <a href="#" class="logo_image"><span class="hidden-480">FlatPoint</span></a>
        <ul class="header_actions pull-left hidden-480 hidden-768">
            <li data-original-title="Hide/Show main navigation" rel="tooltip" data-placement="bottom" title=""><a href="#" class="hide_navigation"><i class="icon-chevron-left"></i></a></li>
            <li data-original-title="Change navigation color scheme" rel="tooltip" data-placement="right" title="" class="color_pick navigation_color_pick"><a class="iconic" href="#"><i class="icon-th"></i></a>
                <ul>
                    <li><a class="blue" href="#"></a></li>
                    <li><a class="light_blue" href="#"></a></li>
                    <li><a class="grey" href="#"></a></li>
                    <li><a class="dark_grey" href="#"></a></li>
                    <li><a class="pink" href="#"></a></li>
                    <li><a class="red" href="#"></a></li>
                    <li><a class="orange" href="#"></a></li>
                    <li><a class="yellow" href="#"></a></li>
                    <li><a class="green" href="#"></a></li>
                    <li><a class="dark_green" href="#"></a></li>
                    <li><a class="turq" href="#"></a></li>
                    <li><a class="dark_turq" href="#"></a></li>
                    <li><a class="purple" href="#"></a></li>
                    <li><a class="violet" href="#"></a></li>
                    <li><a class="dark_blue" href="#"></a></li>
                    <li><a class="dark_red" href="#"></a></li>
                    <li><a class="brown" href="#"></a></li>
                    <li><a class="black" href="#"></a></li>
                    <a class="dark_navigation" href="#">Dark navigation</a>
                </ul>
            </li>
        </ul>
        <ul class="header_actions">
            <li data-original-title="Header color scheme" rel="tooltip" data-placement="left" title="" class="color_pick header_color_pick hidden-480"><a class="iconic" href="#"><i class="icon-th"></i></a>
                <ul>
                    <li><a class="blue set_color" href="#"></a></li>
                    <li><a class="light_blue set_color" href="#"></a></li>
                    <li><a class="grey set_color" href="#"></a></li>
                    <li><a class="dark_grey set_color" href="#"></a></li>
                    <li><a class="pink set_color" href="#"></a></li>
                    <li><a class="red set_color" href="#"></a></li>
                    <li><a class="orange set_color" href="#"></a></li>
                    <li><a class="yellow set_color" href="#"></a></li>
                    <li><a class="green set_color" href="#"></a></li>
                    <li><a class="dark_green set_color" href="#"></a></li>
                    <li><a class="turq set_color" href="#"></a></li>
                    <li><a class="dark_turq set_color" href="#"></a></li>
                    <li><a class="purple set_color" href="#"></a></li>
                    <li><a class="violet set_color" href="#"></a></li>
                    <li><a class="dark_blue set_color" href="#"></a></li>
                    <li><a class="dark_red set_color" href="#"></a></li>
                    <li><a class="brown set_color" href="#"></a></li>
                    <li><a class="black set_color" href="#"></a></li>
                </ul>
            </li>
            <li data-original-title="2 new messages" rel="tooltip" data-placement="bottom" title="" class="hidden-480 messages"><a class="iconic" href="#"><i class="icon-envelope-alt"></i> 2</a>
                <ul class="dropdown-menu pull-right messages_dropdown">
                    <li>
                        <a href="#">
                            <img src="Flatpoint%20-%20Responsive%20Web%20App%20Template_files/avatar_06.png" alt="">
                            <div class="details">
                                <div class="name">Jane Doe</div>
                                <div class="message">
                                    Lorem ipsum Commodo quis nisi...
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="Flatpoint%20-%20Responsive%20Web%20App%20Template_files/avatar_05.png" alt="">
                            <div class="details">
                                <div class="name">Jane Doe</div>
                                <div class="message">
                                    Lorem ipsum Commodo quis nisi...
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="Flatpoint%20-%20Responsive%20Web%20App%20Template_files/avatar_04.png" alt="">
                            <div class="details">
                                <div class="name">Jane Doe</div>
                                <div class="message">
                                    Lorem ipsum Commodo quis nisi...
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="Flatpoint%20-%20Responsive%20Web%20App%20Template_files/avatar_05.png" alt="">
                            <div class="details">
                                <div class="name">Jane Doe</div>
                                <div class="message">
                                    Lorem ipsum Commodo quis nisi...
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="Flatpoint%20-%20Responsive%20Web%20App%20Template_files/avatar_06.png" alt="">
                            <div class="details">
                                <div class="name">Jane Doe</div>
                                <div class="message">
                                    Lorem ipsum Commodo quis nisi...
                                </div>
                            </div>
                        </a>
                    </li>
                    <a href="#" class="btn btn-block blue align_left"><span>Messages center</span></a>
                </ul>
            </li>
            <li class="dropdown"><a href="#"><img src="Flatpoint%20-%20Responsive%20Web%20App%20Template_files/avatar_06.png" alt="User image" class="avatar"> Bernad Delic <i class="icon-angle-down"></i></a>
                <ul>
                    <li><a href="#"><i class="icon-cog"></i> User options</a></li>
                    <li><a href="#"><i class="icon-inbox"></i> Messages</a></li>
                    <li><a href="#"><i class="icon-user"></i> Friends</a></li>
                    <li><a href="#"><i class="icon-remove"></i> Logout</a></li>
                </ul>
            </li>
            <li><a href="#"><i class="icon-signout"></i> <span class="hidden-768 hidden-480">Logout</span></a></li>
            <li class="responsive_menu"><a class="iconic" href="#"><i class="icon-reorder"></i></a></li>
        </ul>
    </header>

    <div id="main_navigation" class="dark_navigation"> <!-- Main navigation start -->
        <div style="height: 593px;" class="inner_navigation mCustomScrollbar _mCS_1"><div class="mCustomScrollBox mCS-light" id="mCSB_1" style="position:relative; height:100%; overflow:hidden; max-width:100%;"><div class="mCSB_container" style="position:relative; top:0;">
            <ul class="main">
                <li class="active navAct"><a class="expand subOpened" id="current" href="http://leviatz.com/flatpoint/dashboard.html"><i class="icon-home"></i> Dashboard<span class="count"><i class="icon-chevron-down"></i></span></a>
                    
                </li>
                <li><a class="expand subClosed" href="#"><i class="icon-reorder"></i> Forms<span class="count"><i class="icon-chevron-down"></i></span></a>
                    <ul style="display: none;" class="sub_main">
                        <li><a href="http://leviatz.com/flatpoint/forms.html">Form elements</a></li>
                        <li><a href="http://leviatz.com/flatpoint/forms_advanced.html">Forms advanced</a></li>
                        <li><a href="http://leviatz.com/flatpoint/forms_layout.html">Forms layout</a></li>
                        <li><a href="http://leviatz.com/flatpoint/forms_wizard.html">Form wizards</a></li>
                        <li><a href="http://leviatz.com/flatpoint/forms_validation.html">Form validation</a></li>
                    </ul>
                </li>
                <li><a class="expand subClosed" href="#"><i class="icon-tasks"></i> Components<span class="count"><i class="icon-chevron-down"></i></span></a>
                    <ul style="display: none;" class="sub_main">
                        <li><a href="http://leviatz.com/flatpoint/component_navigation.html">Only main navigation</a></li>
                        <li><a href="http://leviatz.com/flatpoint/component_sidebar.html">Only sidebar</a></li>
                        <li><a href="http://leviatz.com/flatpoint/component_top_navigation.html">Only top navigation</a></li>
                        <li><a href="http://leviatz.com/flatpoint/component_full_width.html">Full width page</a></li>
                        <li><a href="http://leviatz.com/flatpoint/blank.html">Blank page</a></li>
                    </ul>
                </li>
                <li><a class="expand subClosed" href="#"><i class="icon-tasks"></i> UI elements<span class="count"><i class="icon-chevron-down"></i></span></a>
                    <ul style="display: none;" class="sub_main">
                        <li><a href="http://leviatz.com/flatpoint/ui_draggable_boxes.html">Drag &amp; drop boxes</a></li>
                        <li><a href="http://leviatz.com/flatpoint/ui_buttons.html">Buttons</a></li>
                        <li><a href="http://leviatz.com/flatpoint/ui_bootstrap_elements.html">Bootstrap elements</a></li>
                        <li><a href="http://leviatz.com/flatpoint/ui_tabs.html">Bootstrap tabs</a></li>
                        <li><a href="http://leviatz.com/flatpoint/ui_sliders.html">UI sliders</a></li>
                        <li><a href="http://leviatz.com/flatpoint/ui_typography.html">UI typography</a></li>
                        <li><a href="http://leviatz.com/flatpoint/ui_gallery.html">Gallery</a></li>
                        <li><a href="http://leviatz.com/flatpoint/ui_file_manager.html">File manager</a></li>
                    </ul>
                </li>
                <li><a href="http://leviatz.com/flatpoint/page_calendar.html"><i class="icon-calendar"></i> Calendar</a></li>
                <li><a href="http://leviatz.com/flatpoint/page_statistics.html"><i class="icon-signal"></i> Charts &amp; graphs</a></li>
                <li><a class="expand subClosed" href="#"><i class="icon-table"></i> Tables<span class="count"><i class="icon-chevron-down"></i></span></a>
                    <ul style="display: none;" class="sub_main">
                        <li><a href="http://leviatz.com/flatpoint/tables_basic.html">Basic tables</a></li>
                        <li><a href="http://leviatz.com/flatpoint/tables_responsive.html">Responsive tables <span class="label label-important">New!</span></a></li>
                        <li><a href="http://leviatz.com/flatpoint/tables_datatables.html">Datatables</a></li>
                    </ul>
                </li>
                <li><a class="expand subClosed" href="#"><i class="icon-warning-sign"></i> Error pages<span class="count"><i class="icon-chevron-down"></i></span></a>
                    <ul style="display: none;" class="sub_main">
                        <li><a href="http://leviatz.com/flatpoint/error_404.html">404</a></li>
                        <li><a href="http://leviatz.com/flatpoint/error_405.html">405</a></li>
                        <li><a href="http://leviatz.com/flatpoint/error_406.html">406</a></li>
                        <li><a href="http://leviatz.com/flatpoint/error_406.html">500</a></li>
                        <li><a href="http://leviatz.com/flatpoint/error_406.html">502</a></li>
                    </ul>
                </li>
                <li><a class="expand subClosed" href="#"><i class="icon-lock"></i> Login pages<span class="count"><i class="icon-chevron-down"></i></span></a>
                    <ul style="display: none;" class="sub_main">
                        <li><a href="http://leviatz.com/flatpoint/login.html">Basic login</a></li>
                        <li><a href="http://leviatz.com/flatpoint/login-dark-bg.html">Login dark background</a></li>
                        <li><a href="http://leviatz.com/flatpoint/login-v4.html">Login blue background</a></li>
                        <li><a href="http://leviatz.com/flatpoint/login-white-bg.html">Login white background</a></li>
                        <li><a href="http://leviatz.com/flatpoint/login-v2.html">Login slide background</a></li>
                        <li><a href="http://leviatz.com/flatpoint/login-v3.html">Login slide background opacity</a></li>
                    </ul>
                </li>
                <li><a class="expand subClosed" href="#"><i class="icon-indent-right"></i> Example pages<span class="count"><i class="icon-chevron-down"></i></span></a>
                    <ul style="display: none;" class="sub_main">
                        <li><a href="http://leviatz.com/flatpoint/page_faq.html">FAQ</a></li>
                        <li><a href="http://leviatz.com/flatpoint/page_invoice.html">Invoice</a></li>
                        <li><a href="http://leviatz.com/flatpoint/page_maps.html">Maps</a></li>
                        <li><a href="http://leviatz.com/flatpoint/page_messages_center.html">Messages center</a></li>
                        <li><a href="http://leviatz.com/flatpoint/page_price_tables.html">Pricing tables</a></li>
                        <li><a href="http://leviatz.com/flatpoint/page_profile.html">User profile</a></li>
                        <li><a href="http://leviatz.com/flatpoint/page_search.html">Serach results</a></li>
                        <li><a href="http://leviatz.com/flatpoint/page_timeline.html">Timeline</a></li>
                    </ul>
                </li>
            </ul>
        </div><div class="mCSB_scrollTools" style="position: absolute; display: block;"><div class="mCSB_draggerContainer"><div class="mCSB_dragger" style="position: absolute; height: 562px; top: 0px;" oncontextmenu="return false;"><div class="mCSB_dragger_bar" style="position: relative; line-height: 562px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div>
    </div>  

    <div style="padding-top: 45px;" id="content" class="sidebar"> <!-- Content start -->
        <div class="top_bar">
            <ul class="breadcrumb">
              <li><a href="http://leviatz.com/flatpoint/dashboard.html"><i class="icon-home"></i></a> <span class="divider">/</span></li>
              <li class="active"><a href="#">Dashboard</a></li>
            </ul>
        </div>
        <div class="inner_content">
            <div class="statistic clearfix">
                <div class="current_page pull-left">
                    <span><i class="icon-laptop"></i> Dashboard</span> <span class="hidden-480 quote">- Place to start your web app!</span>
                </div>

                >
                </div>
            </div>

            <div class="user_bar">
                <div class="row-fluid">
                    <div class="span6 no-search">
                        <select style="display: none;" id="selFW8" class="chosen chzn-done">
                            <option selected="selected">Show all results</option>
                            <option>Show results</option>
                            <option>Show another results</option>
                            <option>Only mine</option>
                            <option>Display none</option>
                        </select><div title="" style="width: 208px;" class="chzn-container chzn-container-single" id="selFW8_chzn"><a href="javascript:void(0)" class="chzn-single" tabindex="-1"><span>Show all results</span><div><b></b></div></a><div class="chzn-drop" style="left:-9000px;"><div class="chzn-search"><input autocomplete="off" type="text"></div><ul class="chzn-results"><li id="selFW8_chzn_o_0" class="active-result result-selected" style="">Show all results</li><li id="selFW8_chzn_o_1" class="active-result" style="">Show results</li><li id="selFW8_chzn_o_2" class="active-result" style="">Show another results</li><li id="selFW8_chzn_o_3" class="active-result" style="">Only mine</li><li id="selFW8_chzn_o_4" class="active-result" style="">Display none</li></ul></div></div>
                    </div>

                    <div class="span6">
                        <div class="search">
                            <input data-provide="typeahead" name="search" class="typehead span8" placeholder="Search for something" data-source="[&quot;Alabama&quot;,&quot;Alaska&quot;,&quot;Arizona&quot;,&quot;Arkansas&quot;,&quot;California&quot;,&quot;Colorado&quot;,&quot;Connecticut&quot;,&quot;Delaware&quot;,&quot;Florida&quot;,&quot;Georgia&quot;,&quot;Hawaii&quot;,&quot;Idaho&quot;,&quot;Illinois&quot;,&quot;Indiana&quot;,&quot;Iowa&quot;,&quot;Kansas&quot;,&quot;Kentucky&quot;,&quot;Louisiana&quot;,&quot;Maine&quot;,&quot;Maryland&quot;,&quot;Massachusetts&quot;,&quot;Michigan&quot;,&quot;Minnesota&quot;,&quot;Mississippi&quot;,&quot;Missouri&quot;,&quot;Montana&quot;,&quot;Nebraska&quot;,&quot;Nevada&quot;,&quot;New Hampshire&quot;,&quot;New Jersey&quot;,&quot;New Mexico&quot;,&quot;New York&quot;,&quot;North Dakota&quot;,&quot;North Carolina&quot;,&quot;Ohio&quot;,&quot;Oklahoma&quot;,&quot;Oregon&quot;,&quot;Pennsylvania&quot;,&quot;Rhode Island&quot;,&quot;South Carolina&quot;,&quot;South Dakota&quot;,&quot;Tennessee&quot;,&quot;Texas&quot;,&quot;Utah&quot;,&quot;Vermont&quot;,&quot;Virginia&quot;,&quot;Washington&quot;,&quot;West Virginia&quot;,&quot;Wisconsin&quot;,&quot;Wyoming&quot;]" type="text">
                            <button type="submit" class="square-button color-green"><i class="icon-plus"></i></button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="report-widgets hidden-480 hidden-768">
                <div class="row-fluid">
                    <div class="span4">
                        <div class="widget yellow clearfix">
                            <div class="content">
                                <div class="icon">
                                    <i class="icon-shopping-cart"></i>
                                    Orders
                                </div>
                                <div class="value">
                                    382
                                </div>
                            </div>
                            <a href="#" class="more"><i class="icon-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="widget orange clearfix">
                            <div class="content">
                                <div class="icon">
                                    <i class="icon-globe"></i>
                                    Visitors
                                </div>
                                <div class="value">
                                    52.587
                                </div>
                            </div>
                            <a href="#" class="more"><i class="icon-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="widget dark_turq clearfix">
                            <div class="content">
                                <div class="icon">
                                    <i class="icon-bar-chart"></i>
                                    Earnings
                                </div>
                                <div class="value">
                                    $253k
                                </div>
                            </div>
                            <a href="#" class="more"><i class="icon-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="status-widgets">
                <div class="row-fluid">
                    <div class="span4">
                        <div class="widget blue clearfix">
                            <div class="options">
                                <ul>
                                    <li><a href="#"><i class="icon-cog"></i></a></li>
                                    <li><a href="#"><i class="icon-refresh"></i></a></li>
                                </ul>
                                <i class="icon-shopping-cart"></i>
                            </div>
                            <div class="details">
                                <div class="number">
                                    382
                                </div>
                                <div class="description">
                                    New Orders
                                </div>
                            </div>
                            <a href="#" class="more"><i class="icon-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="span4">
                        <div class="widget grey clearfix">
                            <div class="options">
                                <ul>
                                    <li><a href="#"><i class="icon-cog"></i></a></li>
                                    <li><a href="#"><i class="icon-refresh"></i></a></li>
                                </ul>
                                <i class="icon-globe"></i>
                            </div>
                            <div class="details">
                                <div class="number">
                                    52.587
                                </div>
                                <div class="description">
                                    New Visitors
                                </div>
                            </div>
                            <a href="#" class="more"><i class="icon-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="span4">
                        <div class="widget red clearfix">
                            <div class="options">
                                <ul>
                                    <li><a href="#"><i class="icon-cog"></i></a></li>
                                    <li><a href="#"><i class="icon-refresh"></i></a></li>
                                </ul>
                                <i class="icon-bar-chart"></i>
                            </div>
                            <div class="details">
                                <div class="number">
                                    $253k
                                </div>
                                <div class="description">
                                    Monthly Earning
                                </div>
                            </div>
                            <a href="#" class="more"><i class="icon-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="quick-actions">
                <ul>
                    <li><a data-original-title="Arrange appointment" rel="tooltip" data-placement="bottom" title="" href="#"><i class="icon-calendar"></i></a></li>
                    <li><a data-original-title="Manage files" rel="tooltip" data-placement="bottom" title="" href="#"><i class="icon-folder-close-alt"></i></a></li>
                    <li><a data-original-title="Visit messages center" rel="tooltip" data-placement="bottom" title="" href="#"><i class="icon-inbox"></i></a></li>
                    <li><a data-original-title="Add new article" rel="tooltip" data-placement="bottom" title="" href="#"><i class="icon-plus"></i></a></li>
                    <li><a data-original-title="Manage site preferences" rel="tooltip" data-placement="bottom" title="" href="#"><i class="icon-cogs"></i></a></li>
                </ul>
            </div>

            <div class="widgets_area">

                

                    <div class="span5">
                        <div class="well dark_blue">
                            <div class="well-header">
                                <h5>Notifications</h5>
                                <ul>
                                    <li class="collapse_well"><a href="#"><i class="icon-minus"></i></a></li>
                                    <li class="color_pick"><a href="#"><i class="icon-th"></i></a>
                                        <ul>
                                            <li><a class="blue set_color" href="#"></a></li>
                                            <li><a class="light_blue set_color" href="#"></a></li>
                                            <li><a class="grey set_color" href="#"></a></li>
                                            <li><a class="pink set_color" href="#"></a></li>
                                            <li><a class="red set_color" href="#"></a></li>
                                            <li><a class="orange set_color" href="#"></a></li>
                                            <li><a class="yellow set_color" href="#"></a></li>
                                            <li><a class="green set_color" href="#"></a></li>
                                            <li><a class="dark_green set_color" href="#"></a></li>
                                            <li><a class="turq set_color" href="#"></a></li>
                                            <li><a class="dark_turq set_color" href="#"></a></li>
                                            <li><a class="purple set_color" href="#"></a></li>
                                            <li><a class="violet set_color" href="#"></a></li>
                                            <li><a class="dark_blue set_color" href="#"></a></li>
                                            <li><a class="dark_red set_color" href="#"></a></li>
                                            <li><a class="brown set_color" href="#"></a></li>
                                            <li><a class="black set_color" href="#"></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>

                            <div class="well-content no_padding">
                                <ul class="rows">
                                    <li>
                                        <span class="icon error"><i class="icon-bolt"></i></span>
                                        <p>Server overloaded, please take care of it!</p>
                                    </li>
                                    <li>
                                        <span class="icon info"><i class="icon-bell"></i></span>
                                        <p>New update for cms is available.</p>
                                    </li>
                                    <li>
                                        <span class="icon success"><i class="icon-ok"></i></span>
                                        <p>New settings saved successfully.</p>
                                    </li>
                                    <li>
                                        <span class="icon warning"><i class="icon-bullhorn"></i></span>
                                        <p>You are reaching your diskspace limit.</p>
                                    </li>
                                    <li>
                                        <span class="icon error"><i class="icon-bolt"></i></span>
                                        <p>Diskspace limit reached. <a href="#">Expand</a> your limit!</p>
                                    </li>
                                    <li>
                                        <span class="icon info"><i class="icon-bell"></i></span>
                                        <p>New version 1.01 is available for download!</p>
                                    </li>
                                    <li>
                                        <span class="icon success"><i class="icon-ok"></i></span>
                                        <p>New order recieved from user <a href="#">rhoulettex</a>
                                    </p></li>
                                    <li>
                                        <span class="icon warning"><i class="icon-bullhorn"></i></span>
                                        <p>This could be a warning on something...</p>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="well grey">
                            <div class="well-header">
                                <h5>Tabbed content</h5>
                                <ul>
                                    <li class="collapse_well"><a href="#"><i class="icon-minus"></i></a></li>
                                    <li class="color_pick"><a href="#"><i class="icon-th"></i></a>
                                        <ul>
                                            <li><a class="blue set_color" href="#"></a></li>
                                            <li><a class="light_blue set_color" href="#"></a></li>
                                            <li><a class="grey set_color" href="#"></a></li>
                                            <li><a class="pink set_color" href="#"></a></li>
                                            <li><a class="red set_color" href="#"></a></li>
                                            <li><a class="orange set_color" href="#"></a></li>
                                            <li><a class="yellow set_color" href="#"></a></li>
                                            <li><a class="green set_color" href="#"></a></li>
                                            <li><a class="dark_green set_color" href="#"></a></li>
                                            <li><a class="turq set_color" href="#"></a></li>
                                            <li><a class="dark_turq set_color" href="#"></a></li>
                                            <li><a class="purple set_color" href="#"></a></li>
                                            <li><a class="violet set_color" href="#"></a></li>
                                            <li><a class="dark_blue set_color" href="#"></a></li>
                                            <li><a class="dark_red set_color" href="#"></a></li>
                                            <li><a class="brown set_color" href="#"></a></li>
                                            <li><a class="black set_color" href="#"></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>

                            <div class="well-content no_padding">
                                <div class="navbar-inner">
                                    <ul class="nav nav-tabs">
                                      <li class="active"><a href="#example-tab1" data-toggle="tab">Latest images</a></li>
                                      <li><a href="#example-tab2" data-toggle="tab">Latest notifications</a></li>
                                    </ul>
                                </div>
                                <div class="tab-content">
                                  <div class="tab-pane active" id="example-tab1">
                                    <div class="row-fluid">
                                        <ul class="thumbnails">
                                            <li class="span4">
                                                <div class="view">
                                                    <div class="image">
                                                        <img src="Flatpoint%20-%20Responsive%20Web%20App%20Template_files/preview_03.png" alt="">
                                                        <a href="#" class="overlay"></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="span4">
                                                <div class="view">
                                                    <div class="image">
                                                        <img src="Flatpoint%20-%20Responsive%20Web%20App%20Template_files/preview_01.png" alt="">
                                                        <a href="#" class="overlay"></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="span4">
                                                <div class="view">
                                                    <div class="image">
                                                        <img src="Flatpoint%20-%20Responsive%20Web%20App%20Template_files/preview_02.png" alt="">
                                                        <a style="opacity: 0;" href="#" class="overlay"></a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <ul class="thumbnails">
                                            <li class="span4">
                                                <div class="view">
                                                    <div class="image">
                                                        <img src="Flatpoint%20-%20Responsive%20Web%20App%20Template_files/preview_01.png" alt="">
                                                        <a href="#" class="overlay"></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="span4">
                                                <div class="view">
                                                    <div class="image">
                                                        <img src="Flatpoint%20-%20Responsive%20Web%20App%20Template_files/preview_03.png" alt="">
                                                        <a href="#" class="overlay"></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="span4">
                                                <div class="view">
                                                    <div class="image">
                                                        <img src="Flatpoint%20-%20Responsive%20Web%20App%20Template_files/preview_01.png" alt="">
                                                        <a style="opacity: 0;" href="#" class="overlay"></a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <ul class="thumbnails">
                                            <li class="span4">
                                                <div class="view">
                                                    <div class="image">
                                                        <img src="Flatpoint%20-%20Responsive%20Web%20App%20Template_files/preview_02.png" alt="">
                                                        <a href="#" class="overlay"></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="span4">
                                                <div class="view">
                                                    <div class="image">
                                                        <img src="Flatpoint%20-%20Responsive%20Web%20App%20Template_files/preview_01.png" alt="">
                                                        <a href="#" class="overlay"></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="span4">
                                                <div class="view">
                                                    <div class="image">
                                                        <img src="Flatpoint%20-%20Responsive%20Web%20App%20Template_files/preview_04.png" alt="">
                                                        <a href="#" class="overlay"></a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                  </div>
                                  <div class="tab-pane no_padding" id="example-tab2">
                                    <ul class="rows user_activity">
                                        <li>
                                            <div class="avatar">
                                                <img src="Flatpoint%20-%20Responsive%20Web%20App%20Template_files/avatar_06.png" alt="avatar">
                                            </div>
                                            <span class="name_time">
                                                John Doe<br>
                                                <i>25 March 2013</i>
                                            </span>
                                            <div class="status">
                                                <span class="label label-success">New user</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="avatar">
                                                <img src="Flatpoint%20-%20Responsive%20Web%20App%20Template_files/avatar.png" alt="avatar">
                                            </div>
                                            <span class="name_time">
                                                Martin Smith<br>
                                                <i>26 March 2013</i>
                                            </span>
                                            <div class="status">
                                                <span class="label label-info">New order</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="avatar">
                                                <img src="Flatpoint%20-%20Responsive%20Web%20App%20Template_files/avatar_05.png" alt="avatar">
                                            </div>
                                            <span class="name_time">
                                                Bernad Delic<br>
                                                <i>15 April 2013</i>
                                            </span>
                                            <div class="status">
                                                <span class="label label-success">New user</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="avatar">
                                                <img src="Flatpoint%20-%20Responsive%20Web%20App%20Template_files/avatar.png" alt="avatar">
                                            </div>
                                            <span class="name_time">
                                                Martin Smith<br>
                                                <i>26 March 2013</i>
                                            </span>
                                            <div class="status">
                                                <span class="label label-warning">Shipped order</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="avatar">
                                                <img src="Flatpoint%20-%20Responsive%20Web%20App%20Template_files/avatar_05.png" alt="avatar">
                                            </div>
                                            <span class="name_time">
                                                Bernad Delic<br>
                                                <i>15 April 2013</i>
                                            </span>
                                            <div class="status">
                                                <span class="label label-important">Canceled order</span>
                                            </div>
                                        </li>
                                    </ul>
                                  </div>
                                </div>
                            </div>
                        </div>

                        <div class="well dark_turq">
                            <div class="well-header">
                                <ul class="nav nav-tabs pull-left">
                                  <li class="active"><a class="icon" href="#n1" data-toggle="tab"><i class="icon-user"></i></a></li>
                                  <li><a class="icon" href="#n2" data-toggle="tab"><i class="icon-shopping-cart"></i></a></li>
                                  <li><a class="icon" href="#n3" data-toggle="tab"><i class="icon-camera"></i></a></li>
                                  <li><a class="icon" href="#n4" data-toggle="tab"><i class="icon-envelope-alt"></i></a></li>
                                </ul>
                            </div>

                            <div class="well-content no_padding">
                                <div class="tab-content">
                                  <div class="tab-pane no_padding active" id="n1">
                                    <ul class="rows user_activity">
                                        <li>
                                            <div class="avatar">
                                                <img src="Flatpoint%20-%20Responsive%20Web%20App%20Template_files/avatar_06.png" alt="avatar">
                                            </div>
                                            <span class="name_time">
                                                John Doe<br>
                                                <i>25 March 2013</i>
                                            </span>
                                            <div class="status">
                                                <span class="label label-success">New user</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="avatar">
                                                <img src="Flatpoint%20-%20Responsive%20Web%20App%20Template_files/avatar.png" alt="avatar">
                                            </div>
                                            <span class="name_time">
                                                Martin Smith<br>
                                                <i>26 March 2013</i>
                                            </span>
                                            <div class="status">
                                                <span class="label label-success">New user</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="avatar">
                                                <img src="Flatpoint%20-%20Responsive%20Web%20App%20Template_files/avatar_05.png" alt="avatar">
                                            </div>
                                            <span class="name_time">
                                                Bernad Delic<br>
                                                <i>15 April 2013</i>
                                            </span>
                                            <div class="status">
                                                <span class="label label-success">New user</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="avatar">
                                                <img src="Flatpoint%20-%20Responsive%20Web%20App%20Template_files/avatar.png" alt="avatar">
                                            </div>
                                            <span class="name_time">
                                                Martin Smith<br>
                                                <i>26 March 2013</i>
                                            </span>
                                            <div class="status">
                                                <span class="label label-success">New user</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="avatar">
                                                <img src="Flatpoint%20-%20Responsive%20Web%20App%20Template_files/avatar_05.png" alt="avatar">
                                            </div>
                                            <span class="name_time">
                                                Bernad Delic<br>
                                                <i>15 April 2013</i>
                                            </span>
                                            <div class="status">
                                                <span class="label label-success">New user</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="avatar">
                                                <img src="Flatpoint%20-%20Responsive%20Web%20App%20Template_files/avatar_06.png" alt="avatar">
                                            </div>
                                            <span class="name_time">
                                                John Doe<br>
                                                <i>25 March 2013</i>
                                            </span>
                                            <div class="status">
                                                <span class="label label-success">New user</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="avatar">
                                                <img src="Flatpoint%20-%20Responsive%20Web%20App%20Template_files/avatar.png" alt="avatar">
                                            </div>
                                            <span class="name_time">
                                                Martin Smith<br>
                                                <i>26 March 2013</i>
                                            </span>
                                            <div class="status">
                                                <span class="label label-success">New user</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="avatar">
                                                <img src="Flatpoint%20-%20Responsive%20Web%20App%20Template_files/avatar_05.png" alt="avatar">
                                            </div>
                                            <span class="name_time">
                                                Bernad Delic<br>
                                                <i>15 April 2013</i>
                                            </span>
                                            <div class="status">
                                                <span class="label label-success">New user</span>
                                            </div>
                                        </li>
                                    </ul>
                                  </div>
                                  <div class="tab-pane no_padding" id="n2">
                                    <ul class="rows">
                                        <li>
                                            <span class="icon info"><i class="icon-shopping-cart"></i></span>
                                            <p>New order recieved... (#235674)</p>
                                        </li>
                                        <li>
                                            <span class="icon info"><i class="icon-shopping-cart"></i></span>
                                            <p>New order recieved... (#235674)</p>
                                        </li>
                                        <li>
                                            <span class="icon info"><i class="icon-shopping-cart"></i></span>
                                            <p>New order recieved... (#235674)</p>
                                        </li>
                                        <li>
                                            <span class="icon info"><i class="icon-shopping-cart"></i></span>
                                            <p>New order recieved... (#235674)</p>
                                        </li>
                                        <li>
                                            <span class="icon info"><i class="icon-shopping-cart"></i></span>
                                            <p>New order recieved... (#235674)</p>
                                        </li>
                                        <li>
                                            <span class="icon info"><i class="icon-shopping-cart"></i></span>
                                            <p>New order recieved... (#235674)</p>
                                        </li>
                                        <li>
                                            <span class="icon info"><i class="icon-shopping-cart"></i></span>
                                            <p>New order recieved... (#235674)</p>
                                        </li>
                                        <li>
                                            <span class="icon info"><i class="icon-shopping-cart"></i></span>
                                            <p>New order recieved... (#235674)</p>
                                        </li>
                                        <li>
                                            <span class="icon info"><i class="icon-shopping-cart"></i></span>
                                            <p>New order recieved... (#235674)</p>
                                        </li>
                                        <li>
                                            <span class="icon info"><i class="icon-shopping-cart"></i></span>
                                            <p>New order recieved... (#235674)</p>
                                        </li>
                                        <li>
                                            <span class="icon info"><i class="icon-shopping-cart"></i></span>
                                            <p>New order recieved... (#235674)</p>
                                        </li>
                                        <li>
                                            <span class="icon info"><i class="icon-shopping-cart"></i></span>
                                            <p>New order recieved... (#235674)</p>
                                        </li>
                                        <li>
                                            <span class="icon info"><i class="icon-shopping-cart"></i></span>
                                            <p>New order recieved... (#235674)</p>
                                        </li>
                                    </ul>
                                  </div>
                                  <div class="tab-pane" id="n3">
                                    <ul class="thumbnails">
                                        <li class="span4">
                                            <div class="view">
                                                <div class="image">
                                                    <img src="Flatpoint%20-%20Responsive%20Web%20App%20Template_files/preview_03.png" alt="">
                                                    <a href="#" class="overlay"></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="span4">
                                            <div class="view">
                                                <div class="image">
                                                    <img src="Flatpoint%20-%20Responsive%20Web%20App%20Template_files/preview_01.png" alt="">
                                                    <a href="#" class="overlay"></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="span4">
                                            <div class="view">
                                                <div class="image">
                                                    <img src="Flatpoint%20-%20Responsive%20Web%20App%20Template_files/preview_02.png" alt="">
                                                    <a href="#" class="overlay"></a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul class="thumbnails">
                                        <li class="span4">
                                            <div class="view">
                                                <div class="image">
                                                    <img src="Flatpoint%20-%20Responsive%20Web%20App%20Template_files/preview_01.png" alt="">
                                                    <a href="#" class="overlay"></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="span4">
                                            <div class="view">
                                                <div class="image">
                                                    <img src="Flatpoint%20-%20Responsive%20Web%20App%20Template_files/preview_03.png" alt="">
                                                    <a href="#" class="overlay"></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="span4">
                                            <div class="view">
                                                <div class="image">
                                                    <img src="Flatpoint%20-%20Responsive%20Web%20App%20Template_files/preview_01.png" alt="">
                                                    <a href="#" class="overlay"></a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul class="thumbnails">
                                        <li class="span4">
                                            <div class="view">
                                                <div class="image">
                                                    <img src="Flatpoint%20-%20Responsive%20Web%20App%20Template_files/preview_02.png" alt="">
                                                    <a href="#" class="overlay"></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="span4">
                                            <div class="view">
                                                <div class="image">
                                                    <img src="Flatpoint%20-%20Responsive%20Web%20App%20Template_files/preview_01.png" alt="">
                                                    <a href="#" class="overlay"></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="span4">
                                            <div class="view">
                                                <div class="image">
                                                    <img src="Flatpoint%20-%20Responsive%20Web%20App%20Template_files/preview_04.png" alt="">
                                                    <a href="#" class="overlay"></a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul class="thumbnails">
                                        <li class="span4">
                                            <div class="view">
                                                <div class="image">
                                                    <img src="Flatpoint%20-%20Responsive%20Web%20App%20Template_files/preview_03.png" alt="">
                                                    <a href="#" class="overlay"></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="span4">
                                            <div class="view">
                                                <div class="image">
                                                    <img src="Flatpoint%20-%20Responsive%20Web%20App%20Template_files/preview_01.png" alt="">
                                                    <a href="#" class="overlay"></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="span4">
                                            <div class="view">
                                                <div class="image">
                                                    <img src="Flatpoint%20-%20Responsive%20Web%20App%20Template_files/preview_02.png" alt="">
                                                    <a href="#" class="overlay"></a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul class="thumbnails">
                                        <li class="span4">
                                            <div class="view">
                                                <div class="image">
                                                    <img src="Flatpoint%20-%20Responsive%20Web%20App%20Template_files/preview_01.png" alt="">
                                                    <a href="#" class="overlay"></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="span4">
                                            <div class="view">
                                                <div class="image">
                                                    <img src="Flatpoint%20-%20Responsive%20Web%20App%20Template_files/preview_03.png" alt="">
                                                    <a href="#" class="overlay"></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="span4">
                                            <div class="view">
                                                <div class="image">
                                                    <img src="Flatpoint%20-%20Responsive%20Web%20App%20Template_files/preview_01.png" alt="">
                                                    <a href="#" class="overlay"></a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul class="thumbnails">
                                        <li class="span4">
                                            <div class="view">
                                                <div class="image">
                                                    <img src="Flatpoint%20-%20Responsive%20Web%20App%20Template_files/preview_02.png" alt="">
                                                    <a href="#" class="overlay"></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="span4">
                                            <div class="view">
                                                <div class="image">
                                                    <img src="Flatpoint%20-%20Responsive%20Web%20App%20Template_files/preview_01.png" alt="">
                                                    <a href="#" class="overlay"></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="span4">
                                            <div class="view">
                                                <div class="image">
                                                    <img src="Flatpoint%20-%20Responsive%20Web%20App%20Template_files/preview_04.png" alt="">
                                                    <a href="#" class="overlay"></a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                  </div>
                                  <div class="tab-pane no_padding" id="n4">
                                    <ul class="rows user_activity">
                                        <li>
                                            <div class="avatar">
                                                <img src="Flatpoint%20-%20Responsive%20Web%20App%20Template_files/avatar_06.png" alt="avatar">
                                            </div>
                                            <span class="name_time">
                                                John Doe, <i>25 March 2013</i><br>
                                                Lorem ipsum dolor sit amet, consectetur...
                                                <a href="#">Read message</a>
                                            </span>
                                        </li>
                                        <li>
                                            <div class="avatar">
                                                <img src="Flatpoint%20-%20Responsive%20Web%20App%20Template_files/avatar_03.png" alt="avatar">
                                            </div>
                                            <span class="name_time">
                                                John Doe, <i>25 March 2013</i><br>
                                                Lorem ipsum dolor sit amet, consectetur...
                                                <a href="#">Read message</a>
                                            </span>
                                        </li>
                                        <li>
                                            <div class="avatar">
                                                <img src="Flatpoint%20-%20Responsive%20Web%20App%20Template_files/avatar_02.png" alt="avatar">
                                            </div>
                                            <span class="name_time">
                                                John Doe, <i>25 March 2013</i><br>
                                                Lorem ipsum dolor sit amet, consectetur...
                                                <a href="#">Read message</a>
                                            </span>
                                        </li>
                                        <li>
                                            <div class="avatar">
                                                <img src="Flatpoint%20-%20Responsive%20Web%20App%20Template_files/avatar_05.png" alt="avatar">
                                            </div>
                                            <span class="name_time">
                                                John Doe, <i>25 March 2013</i><br>
                                                Lorem ipsum dolor sit amet, consectetur...
                                                <a href="#">Read message</a>
                                            </span>
                                        </li>
                                        <li>
                                            <div class="avatar">
                                                <img src="Flatpoint%20-%20Responsive%20Web%20App%20Template_files/avatar_04.png" alt="avatar">
                                            </div>
                                            <span class="name_time">
                                                John Doe, <i>25 March 2013</i><br>
                                                Lorem ipsum dolor sit amet, consectetur...
                                                <a href="#">Read message</a>
                                            </span>
                                        </li>
                                        <li>
                                            <div class="avatar">
                                                <img src="Flatpoint%20-%20Responsive%20Web%20App%20Template_files/avatar_02.png" alt="avatar">
                                            </div>
                                            <span class="name_time">
                                                John Doe, <i>25 March 2013</i><br>
                                                Lorem ipsum dolor sit amet, consectetur...
                                                <a href="#">Read message</a>
                                            </span>
                                        </li>
                                        <li>
                                            <div class="avatar">
                                                <img src="Flatpoint%20-%20Responsive%20Web%20App%20Template_files/avatar_05.png" alt="avatar">
                                            </div>
                                            <span class="name_time">
                                                John Doe, <i>25 March 2013</i><br>
                                                Lorem ipsum dolor sit amet, consectetur...
                                                <a href="#">Read message</a>
                                            </span>
                                        </li>
                                        <li>
                                            <div class="avatar">
                                                <img src="Flatpoint%20-%20Responsive%20Web%20App%20Template_files/avatar_04.png" alt="avatar">
                                            </div>
                                            <span class="name_time">
                                                John Doe, <i>25 March 2013</i><br>
                                                Lorem ipsum dolor sit amet, consectetur...
                                                <a href="#">Read message</a>
                                            </span>
                                        </li>
                                    </ul>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row-fluid">
                    <div class="span12">
                        <div class="well orange">
                            <div class="well-header">
                                <h5>Messages system</h5>
                                <ul>
                                    <li><a href="#"><i class="icon-rotate-right"></i></a></li>
                                    <li class="color_pick"><a href="#"><i class="icon-th"></i></a>
                                        <ul>
                                            <li><a class="blue set_color" href="#"></a></li>
                                            <li><a class="light_blue set_color" href="#"></a></li>
                                            <li><a class="grey set_color" href="#"></a></li>
                                            <li><a class="pink set_color" href="#"></a></li>
                                            <li><a class="red set_color" href="#"></a></li>
                                            <li><a class="orange set_color" href="#"></a></li>
                                            <li><a class="yellow set_color" href="#"></a></li>
                                            <li><a class="green set_color" href="#"></a></li>
                                            <li><a class="dark_green set_color" href="#"></a></li>
                                            <li><a class="turq set_color" href="#"></a></li>
                                            <li><a class="dark_turq set_color" href="#"></a></li>
                                            <li><a class="purple set_color" href="#"></a></li>
                                            <li><a class="violet set_color" href="#"></a></li>
                                            <li><a class="dark_blue set_color" href="#"></a></li>
                                            <li><a class="dark_red set_color" href="#"></a></li>
                                            <li><a class="brown set_color" href="#"></a></li>
                                            <li><a class="black set_color" href="#"></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>

                            <div class="well-content no_padding">
                                <div class="chat_line">
                                    <div class="avatar">
                                        <img src="Flatpoint%20-%20Responsive%20Web%20App%20Template_files/avatar_06.png" alt="Avatar">
                                    </div>

                                    <div class="message">
                                        <p>Sed ut perspiciatis unde 
omnis iste natus error sit voluptatem accusantium doloremque laudantium,
 totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
 architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam 
voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia 
consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                    </div>
                                </div>
                                <div class="chat_line right_side">
                                    <div class="avatar">
                                        <img src="Flatpoint%20-%20Responsive%20Web%20App%20Template_files/avatar.png" alt="Avatar">
                                    </div>

                                    <div class="message">
                                        <p>Sed ut perspiciatis unde 
omnis iste natus error sit voluptatem accusantium doloremque laudantium,
 totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
 architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam 
voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                                    </div>
                                </div>
                                <div class="chat_line">
                                    <div class="avatar">
                                        <img src="Flatpoint%20-%20Responsive%20Web%20App%20Template_files/avatar_06.png" alt="Avatar">
                                    </div>

                                    <div class="message">
                                        <p>Sed ut perspiciatis unde 
omnis iste natus error sit voluptatem accusantium doloremque laudantium,
 totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
 architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam 
voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia 
consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                    </div>
                                </div>
                                <div class="chat_line">
                                    <div class="avatar">
                                        <img src="Flatpoint%20-%20Responsive%20Web%20App%20Template_files/avatar_06.png" alt="Avatar">
                                    </div>

                                    <div class="message">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore...</p>
                                    </div>
                                </div>
                                <div class="chat_line right_side">
                                    <div class="avatar">
                                        <img src="Flatpoint%20-%20Responsive%20Web%20App%20Template_files/avatar.png" alt="Avatar">
                                    </div>

                                    <div class="message">
                                        <p>Sed ut perspiciatis unde 
omnis iste natus error sit voluptatem accusantium doloremque laudantium,
 totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
 architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam 
voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia 
consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                    </div>
                                </div>
                                <div class="type_message">
                                    <input class="span12" name="message" placeholder="Type message here.." type="text">
                                    <button type="submit" class="btn input_button orange"><i class="icon-arrow-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row-fluid">
                    <div class="span12">
                        <div class="well grey">
                            <div class="well-header">
                                <h5>Responsive table</h5>
                                <ul>
                                    <li class="color_pick"><a href="#"><i class="icon-th"></i></a>
                                        <ul>
                                            <li><a class="blue set_color" href="#"></a></li>
                                            <li><a class="light_blue set_color" href="#"></a></li>
                                            <li><a class="grey set_color" href="#"></a></li>
                                            <li><a class="pink set_color" href="#"></a></li>
                                            <li><a class="red set_color" href="#"></a></li>
                                            <li><a class="orange set_color" href="#"></a></li>
                                            <li><a class="yellow set_color" href="#"></a></li>
                                            <li><a class="green set_color" href="#"></a></li>
                                            <li><a class="dark_green set_color" href="#"></a></li>
                                            <li><a class="turq set_color" href="#"></a></li>
                                            <li><a class="dark_turq set_color" href="#"></a></li>
                                            <li><a class="purple set_color" href="#"></a></li>
                                            <li><a class="violet set_color" href="#"></a></li>
                                            <li><a class="dark_blue set_color" href="#"></a></li>
                                            <li><a class="dark_red set_color" href="#"></a></li>
                                            <li><a class="brown set_color" href="#"></a></li>
                                            <li><a class="black set_color" href="#"></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>

                            <div class="well-content no-padding">
                                <p>This is responsive table (no div 
elements etc, just simple clean table). If screen is big enough to 
display all columns it will display it. Otherwise it will break columns 
and display as drop down like table like below. You can try to set even 
smaller size of window to preview result. While using responsive table 
you decide which columns are going to be visible always, which ones will
 break on tablet which ones on phone etc... Enjoy the powerfull tables 
:)</p>
                                <p><span class="label label-important">Hot!</span> <a href="http://leviatz.com/flatpoint/responsive_tables.html">Responsive tables</a>. This responsive tables have options for filtering and sorting too... Cool isn't it? :)</p>
                                <div style="height: 400px;" class="responsive_table_container mCustomScrollbar _mCS_2"><div class="mCustomScrollBox mCS-light" id="mCSB_2" style="position:relative; height:100%; overflow:hidden; max-width:100%;"><div class="mCSB_container" style="position: relative; top: 0px;">
                                    <table data-filter="#filter" class="table footable footable-loaded tablet breakpoint">
                                        <thead>
                                            <tr>
                                                <th style="display: none;" data-hide="phone,tablet">#</th>
                                                <th class="footable-first-column" data-class="expand" data-sort-initial="true">Name</th>
                                                <th style="display: none;" data-hide="phone,tablet">Email</th>
                                                <th style="display: none;" data-hide="phone,tablet">Country</th>
                                                <th style="display: none;" data-hide="phone,tablet">Phone</th>
                                                <th class="footable-last-column">Order</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="display: none;">1</td>
                                                <td class="expand footable-first-column">Elliott Walter</td>
                                                <td style="display: none;">dolor.elit.pellentesque@disparturientmontes.net</td>
                                                <td style="display: none;">Antigua and Barbuda</td>
                                                <td style="display: none;">361 9258-951</td>
                                                <td class="footable-last-column"><span class="label label-success">Completed</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">2</td>
                                                <td class="expand footable-first-column">Quinlan Owens</td>
                                                <td style="display: none;">fermentum.vel@nuncidenim.org</td>
                                                <td style="display: none;">South Georgia and The South Sandwich Islands</td>
                                                <td style="display: none;">931 8158-728</td>
                                                <td class="footable-last-column"><span class="label label-success">Completed</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">3</td>
                                                <td class="expand footable-first-column">Vivien Cotton</td>
                                                <td style="display: none;">feugiat.tellus@Sed.co.uk</td>
                                                <td style="display: none;">Algeria</td>
                                                <td style="display: none;">197 7676-514</td>
                                                <td class="footable-last-column"><span class="label label-success">Completed</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">4</td>
                                                <td class="expand footable-first-column">Erica Powell</td>
                                                <td style="display: none;">non@dapibusligula.co.uk</td>
                                                <td style="display: none;">Ireland</td>
                                                <td style="display: none;">393 5416-516</td>
                                                <td class="footable-last-column"><span class="label label-inverse">Shipped</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">5</td>
                                                <td class="expand footable-first-column">Deanna Pope</td>
                                                <td style="display: none;">semper@eleifend.org</td>
                                                <td style="display: none;">Panama</td>
                                                <td style="display: none;">999 6110-505</td>
                                                <td class="footable-last-column"><span class="label label-success">Completed</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">6</td>
                                                <td class="expand footable-first-column">Emerald Harding</td>
                                                <td style="display: none;">dolor@nostraperinceptos.net</td>
                                                <td style="display: none;">Kazakhstan</td>
                                                <td style="display: none;">417 1363-790</td>
                                                <td class="footable-last-column"><span class="label label-inverse">Shipped</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">7</td>
                                                <td class="expand footable-first-column">Edward Brock</td>
                                                <td style="display: none;">velit@lobortisrisus.co.uk</td>
                                                <td style="display: none;">Hungary</td>
                                                <td style="display: none;">286 5864-139</td>
                                                <td class="footable-last-column"><span class="label label-success">Completed</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">8</td>
                                                <td class="expand footable-first-column">Mira Stevenson</td>
                                                <td style="display: none;">arcu@cubiliaCurae;.edu</td>
                                                <td style="display: none;">Dominican Republic</td>
                                                <td style="display: none;">215 3399-583</td>
                                                <td class="footable-last-column"><span class="label label-important">Canceled</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">9</td>
                                                <td class="expand footable-first-column">Daria Leblanc</td>
                                                <td style="display: none;">neque.Morbi.quis@facilisisvitaeorci.ca</td>
                                                <td style="display: none;">Dominica</td>
                                                <td style="display: none;">629 4490-703</td>
                                                <td class="footable-last-column"><span class="label label-warning">Pending</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">10</td>
                                                <td class="expand footable-first-column">Desirae Luna</td>
                                                <td style="display: none;">eleifend.nec.malesuada@mauris.ca</td>
                                                <td style="display: none;">Saint Lucia</td>
                                                <td style="display: none;">259 7274-236</td>
                                                <td class="footable-last-column"><span class="label label-success">Completed</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">11</td>
                                                <td class="expand footable-first-column">Emmanuel Bright</td>
                                                <td style="display: none;">risus.Morbi@faucibusidlibero.ca</td>
                                                <td style="display: none;">Sao Tome and Principe</td>
                                                <td style="display: none;">840 4224-872</td>
                                                <td class="footable-last-column"><span class="label label-inverse">Shipped</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">12</td>
                                                <td class="expand footable-first-column">Raphael Joseph</td>
                                                <td style="display: none;">Sed.eget.lacus@Duisacarcu.co.uk</td>
                                                <td style="display: none;">Nepal</td>
                                                <td style="display: none;">849 9028-695</td>
                                                <td class="footable-last-column"><span class="label label-success">Completed</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">13</td>
                                                <td class="expand footable-first-column">Wendy Newman</td>
                                                <td style="display: none;">vestibulum.neque.sed@euenim.ca</td>
                                                <td style="display: none;">Malawi</td>
                                                <td style="display: none;">883 3850-147</td>
                                                <td class="footable-last-column"><span class="label label-success">Completed</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">14</td>
                                                <td class="expand footable-first-column">Yoshio Webster</td>
                                                <td style="display: none;">mattis.Integer.eu@eutempor.org</td>
                                                <td style="display: none;">Cayman Islands</td>
                                                <td style="display: none;">301 9854-429</td>
                                                <td class="footable-last-column"><span class="label label-important">Canceled</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">15</td>
                                                <td class="expand footable-first-column">Melvin Walsh</td>
                                                <td style="display: none;">dolor.Nulla.semper@Sed.org</td>
                                                <td style="display: none;">Aruba</td>
                                                <td style="display: none;">210 0087-828</td>
                                                <td class="footable-last-column"><span class="label label-inverse">Shipped</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">16</td>
                                                <td class="expand footable-first-column">Anjolie Chan</td>
                                                <td style="display: none;">nec.tempus@interdumfeugiat.org</td>
                                                <td style="display: none;">Wallis and Futuna</td>
                                                <td style="display: none;">866 8448-689</td>
                                                <td class="footable-last-column"><span class="label label-warning">Pending</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">17</td>
                                                <td class="expand footable-first-column">Tarik Ayala</td>
                                                <td style="display: none;">amet.nulla.Donec@purusaccumsaninterdum.org</td>
                                                <td style="display: none;">Angola</td>
                                                <td style="display: none;">340 4050-890</td>
                                                <td class="footable-last-column"><span class="label label-success">Completed</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">18</td>
                                                <td class="expand footable-first-column">Joelle Burch</td>
                                                <td style="display: none;">dignissim@liberoduinec.com</td>
                                                <td style="display: none;">Nepal</td>
                                                <td style="display: none;">915 0919-969</td>
                                                <td class="footable-last-column"><span class="label label-inverse">Shipped</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">19</td>
                                                <td class="expand footable-first-column">Mary Cantrell</td>
                                                <td style="display: none;">Vestibulum.ante@anteiaculisnec.net</td>
                                                <td style="display: none;">Netherlands</td>
                                                <td style="display: none;">241 3641-677</td>
                                                <td class="footable-last-column"><span class="label label-inverse">Shipped</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">20</td>
                                                <td class="expand footable-first-column">Madonna Stewart</td>
                                                <td style="display: none;">rutrum.justo@gravidamaurisut.org</td>
                                                <td style="display: none;">Azerbaijan</td>
                                                <td style="display: none;">157 2041-627</td>
                                                <td class="footable-last-column"><span class="label label-success">Completed</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">21</td>
                                                <td class="expand footable-first-column">Brenda Franks</td>
                                                <td style="display: none;">arcu.Vestibulum@etnetuset.co.uk</td>
                                                <td style="display: none;">Lithuania</td>
                                                <td style="display: none;">911 8566-517</td>
                                                <td class="footable-last-column"><span class="label label-inverse">Shipped</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">22</td>
                                                <td class="expand footable-first-column">Rhiannon Richmond</td>
                                                <td style="display: none;">diam.nunc.ullamcorper@loremvitae.net</td>
                                                <td style="display: none;">Cook Islands</td>
                                                <td style="display: none;">863 1950-055</td>
                                                <td class="footable-last-column"><span class="label label-important">Canceled</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">23</td>
                                                <td class="expand footable-first-column">Stacey Dodson</td>
                                                <td style="display: none;">ipsum.cursus@egestasnuncsed.com</td>
                                                <td style="display: none;">Grenada</td>
                                                <td style="display: none;">371 9613-886</td>
                                                <td class="footable-last-column"><span class="label label-success">Completed</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">24</td>
                                                <td class="expand footable-first-column">Rogan Hobbs</td>
                                                <td style="display: none;">Duis.volutpat@nislelementum.org</td>
                                                <td style="display: none;">Kuwait</td>
                                                <td style="display: none;">713 9596-020</td>
                                                <td class="footable-last-column"><span class="label label-important">Canceled</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">25</td>
                                                <td class="expand footable-first-column">Elmo Patel</td>
                                                <td style="display: none;">Nunc@mollisnec.com</td>
                                                <td style="display: none;">Colombia</td>
                                                <td style="display: none;">620 0784-739</td>
                                                <td class="footable-last-column"><span class="label label-warning">Pending</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">26</td>
                                                <td class="expand footable-first-column">Galena Whitney</td>
                                                <td style="display: none;">risus@nunc.edu</td>
                                                <td style="display: none;">Georgia</td>
                                                <td style="display: none;">526 1536-758</td>
                                                <td class="footable-last-column"><span class="label label-success">Completed</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">27</td>
                                                <td class="expand footable-first-column">Glenna Lowe</td>
                                                <td style="display: none;">neque.non.quam@nisi.net</td>
                                                <td style="display: none;">Northern Mariana Islands</td>
                                                <td style="display: none;">519 5305-718</td>
                                                <td class="footable-last-column"><span class="label label-warning">Pending</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">28</td>
                                                <td class="expand footable-first-column">Geoffrey Woodward</td>
                                                <td style="display: none;">risus.Nulla.eget@Maecenasmalesuadafringilla.co.uk</td>
                                                <td style="display: none;">Australia</td>
                                                <td style="display: none;">284 7520-606</td>
                                                <td class="footable-last-column"><span class="label label-warning">Pending</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">29</td>
                                                <td class="expand footable-first-column">Ocean Justice</td>
                                                <td style="display: none;">id.risus.quis@elementum.edu</td>
                                                <td style="display: none;">Israel</td>
                                                <td style="display: none;">367 2389-779</td>
                                                <td class="footable-last-column"><span class="label label-warning">Pending</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">30</td>
                                                <td class="expand footable-first-column">Quynn Cain</td>
                                                <td style="display: none;">Duis.a@acnullaIn.org</td>
                                                <td style="display: none;">American Samoa</td>
                                                <td style="display: none;">817 3896-710</td>
                                                <td class="footable-last-column"><span class="label label-success">Completed</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">31</td>
                                                <td class="expand footable-first-column">Chaney Burgess</td>
                                                <td style="display: none;">feugiat.metus@eratVivamusnisi.edu</td>
                                                <td style="display: none;">Turkmenistan</td>
                                                <td style="display: none;">956 0148-998</td>
                                                <td class="footable-last-column"><span class="label label-warning">Pending</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">32</td>
                                                <td class="expand footable-first-column">Carol Ayers</td>
                                                <td style="display: none;">aliquet.odio@Utsemperpretium.net</td>
                                                <td style="display: none;">Pitcairn</td>
                                                <td style="display: none;">468 5204-613</td>
                                                <td class="footable-last-column"><span class="label label-important">Canceled</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">33</td>
                                                <td class="expand footable-first-column">Lydia Simmons</td>
                                                <td style="display: none;">convallis.est@blanditatnisi.com</td>
                                                <td style="display: none;">Mali</td>
                                                <td style="display: none;">697 6544-221</td>
                                                <td class="footable-last-column"><span class="label label-inverse">Shipped</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">34</td>
                                                <td class="expand footable-first-column">Colette Dale</td>
                                                <td style="display: none;">orci@cursusNuncmauris.edu</td>
                                                <td style="display: none;">Italy</td>
                                                <td style="display: none;">800 6654-189</td>
                                                <td class="footable-last-column"><span class="label label-success">Completed</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">35</td>
                                                <td class="expand footable-first-column">Jolie Frazier</td>
                                                <td style="display: none;">Aliquam@apurus.edu</td>
                                                <td style="display: none;">Croatia</td>
                                                <td style="display: none;">404 6104-319</td>
                                                <td class="footable-last-column"><span class="label label-warning">Pending</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">36</td>
                                                <td class="expand footable-first-column">Shaeleigh Stark</td>
                                                <td style="display: none;">arcu.Nunc@parturient.com</td>
                                                <td style="display: none;">Spain</td>
                                                <td style="display: none;">193 4129-531</td>
                                                <td class="footable-last-column"><span class="label label-success">Completed</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">37</td>
                                                <td class="expand footable-first-column">Lamar Little</td>
                                                <td style="display: none;">Phasellus.libero.mauris@turpisegestasAliquam.co.uk</td>
                                                <td style="display: none;">American Samoa</td>
                                                <td style="display: none;">198 9419-738</td>
                                                <td class="footable-last-column"><span class="label label-warning">Pending</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">38</td>
                                                <td class="expand footable-first-column">Eleanor Hooper</td>
                                                <td style="display: none;">diam.luctus@nislNullaeu.org</td>
                                                <td style="display: none;">Uzbekistan</td>
                                                <td style="display: none;">105 6754-654</td>
                                                <td class="footable-last-column"><span class="label label-important">Canceled</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">39</td>
                                                <td class="expand footable-first-column">Minerva Vargas</td>
                                                <td style="display: none;">eget.magna@euismodetcommodo.org</td>
                                                <td style="display: none;">Mali</td>
                                                <td style="display: none;">358 6906-656</td>
                                                <td class="footable-last-column"><span class="label label-warning">Pending</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">40</td>
                                                <td class="expand footable-first-column">Hedda Hardy</td>
                                                <td style="display: none;">nibh.Phasellus.nulla@ornare.org</td>
                                                <td style="display: none;">Saint Helena</td>
                                                <td style="display: none;">774 6203-159</td>
                                                <td class="footable-last-column"><span class="label label-warning">Pending</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">41</td>
                                                <td class="expand footable-first-column">Alexis Burks</td>
                                                <td style="display: none;">Nunc.ullamcorper.velit@Maecenasiaculisaliquet.com</td>
                                                <td style="display: none;">Martinique</td>
                                                <td style="display: none;">949 3183-421</td>
                                                <td class="footable-last-column"><span class="label label-important">Canceled</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">42</td>
                                                <td class="expand footable-first-column">Ulla Charles</td>
                                                <td style="display: none;">egestas.Duis@quis.com</td>
                                                <td style="display: none;">Niger</td>
                                                <td style="display: none;">396 4732-167</td>
                                                <td class="footable-last-column"><span class="label label-warning">Pending</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">43</td>
                                                <td class="expand footable-first-column">Iliana Greer</td>
                                                <td style="display: none;">Integer.eu@egestaslaciniaSed.co.uk</td>
                                                <td style="display: none;">Azerbaijan</td>
                                                <td style="display: none;">749 8021-247</td>
                                                <td class="footable-last-column"><span class="label label-important">Canceled</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">44</td>
                                                <td class="expand footable-first-column">Whilemina Bryant</td>
                                                <td style="display: none;">turpis.vitae.purus@enim.co.uk</td>
                                                <td style="display: none;">Fiji</td>
                                                <td style="display: none;">767 0158-949</td>
                                                <td class="footable-last-column"><span class="label label-success">Completed</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">45</td>
                                                <td class="expand footable-first-column">Ivy Aguilar</td>
                                                <td style="display: none;">eu@tempus.org</td>
                                                <td style="display: none;">Seychelles</td>
                                                <td style="display: none;">187 1693-186</td>
                                                <td class="footable-last-column"><span class="label label-warning">Pending</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">46</td>
                                                <td class="expand footable-first-column">Wang Meyers</td>
                                                <td style="display: none;">lorem.ut.aliquam@ametornare.net</td>
                                                <td style="display: none;">Bulgaria</td>
                                                <td style="display: none;">275 2914-552</td>
                                                <td class="footable-last-column"><span class="label label-important">Canceled</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">47</td>
                                                <td class="expand footable-first-column">Melinda Benjamin</td>
                                                <td style="display: none;">elit.Aliquam.auctor@vitae.ca</td>
                                                <td style="display: none;">Burundi</td>
                                                <td style="display: none;">290 8893-074</td>
                                                <td class="footable-last-column"><span class="label label-warning">Pending</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">48</td>
                                                <td class="expand footable-first-column">Keelie Grant</td>
                                                <td style="display: none;">nec@veliteusem.com</td>
                                                <td style="display: none;">Kiribati</td>
                                                <td style="display: none;">221 2115-976</td>
                                                <td class="footable-last-column"><span class="label label-important">Canceled</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">49</td>
                                                <td class="expand footable-first-column">Ulysses Jensen</td>
                                                <td style="display: none;">vel.sapien.imperdiet@estNunc.net</td>
                                                <td style="display: none;">Timor-leste</td>
                                                <td style="display: none;">884 2141-965</td>
                                                <td class="footable-last-column"><span class="label label-important">Canceled</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">50</td>
                                                <td class="expand footable-first-column">Hilda Camacho</td>
                                                <td style="display: none;">velit.justo.nec@malesuada.ca</td>
                                                <td style="display: none;">Cape Verde</td>
                                                <td style="display: none;">330 7032-511</td>
                                                <td class="footable-last-column"><span class="label label-success">Completed</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div><div class="mCSB_scrollTools" style="position: absolute; display: block;"><div class="mCSB_draggerContainer"><div class="mCSB_dragger" style="position: absolute; height: 73px; top: 0px;" oncontextmenu="return false;"><div class="mCSB_dragger_bar" style="position: relative; line-height: 73px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="sidebar"> <!-- Sidebar start -->
        <div data-easytabs="true" class="inner_sidebar">
            <ul class="tabs clearfix">
                <li class="tab active"><a class="active" href="#first"><i class="icon-home"></i></a></li>
                <li class="tab"><a href="#second"><i class="icon-th"></i></a></li>
                <li class="tab"><a href="#third"><i class="icon-fullscreen"></i></a></li>
            </ul>
            <div class="tabs_container">
                <div class="tabs-content no_padding">
                    <div style="display: block;" class="tab-box no_padding active" id="first">
                        <div class="widget_content">
                            <h5><i class="icon-reorder"></i> Latest Notifications</h5>
                            <div class="sidebar_widget">
                                <div class="alert alert-success">
                                    <button type="button" class="close" data-dismiss="alert"><i class="icon-remove"></i></button>
                                    <strong>Well done!</strong><br> You successfully read this...
                                </div>
                            </div>
                        </div>
                        <div class="widget_content">
                            <h5><i class="icon-calendar"></i> Bootstrap calendar</h5>
                            <div class="sidebar_widget">
                                <div class="datepicker"><div style="display: block;" class="datepicker datepicker-inline"><div style="display: block;" class="datepicker-days"><table class=" table-condensed"><thead><tr><th style="visibility: visible;" class="prev"><i class="icon-arrow-left"></i></th><th colspan="5" class="datepicker-switch">August 2013</th><th style="visibility: visible;" class="next"><i class="icon-arrow-right"></i></th></tr><tr><th class="dow">Su</th><th class="dow">Mo</th><th class="dow">Tu</th><th class="dow">We</th><th class="dow">Th</th><th class="dow">Fr</th><th class="dow">Sa</th></tr></thead><tbody><tr><td class="day old">28</td><td class="day old">29</td><td class="day old">30</td><td class="day old">31</td><td class="day">1</td><td class="day">2</td><td class="day">3</td></tr><tr><td class="day">4</td><td class="day">5</td><td class="day">6</td><td class="day active">7</td><td class="day">8</td><td class="day">9</td><td class="day">10</td></tr><tr><td class="day">11</td><td class="day">12</td><td class="day">13</td><td class="day">14</td><td class="day">15</td><td class="day">16</td><td class="day">17</td></tr><tr><td class="day">18</td><td class="day">19</td><td class="day">20</td><td class="day">21</td><td class="day">22</td><td class="day">23</td><td class="day">24</td></tr><tr><td class="day">25</td><td class="day">26</td><td class="day">27</td><td class="day">28</td><td class="day">29</td><td class="day">30</td><td class="day">31</td></tr><tr><td class="day new">1</td><td class="day new">2</td><td class="day new">3</td><td class="day new">4</td><td class="day new">5</td><td class="day new">6</td><td class="day new">7</td></tr></tbody><tfoot><tr><th style="display: none;" colspan="7" class="today">Today</th></tr><tr><th style="display: none;" colspan="7" class="clear">Clear</th></tr></tfoot></table></div><div style="display: none;" class="datepicker-months"><table class="table-condensed"><thead><tr><th style="visibility: visible;" class="prev"><i class="icon-arrow-left"></i></th><th colspan="5" class="datepicker-switch">2013</th><th style="visibility: visible;" class="next"><i class="icon-arrow-right"></i></th></tr></thead><tbody><tr><td colspan="7"><span class="month">Jan</span><span class="month">Feb</span><span class="month">Mar</span><span class="month">Apr</span><span class="month">May</span><span class="month">Jun</span><span class="month">Jul</span><span class="month active">Aug</span><span class="month">Sep</span><span class="month">Oct</span><span class="month">Nov</span><span class="month">Dec</span></td></tr></tbody><tfoot><tr><th style="display: none;" colspan="7" class="today">Today</th></tr><tr><th style="display: none;" colspan="7" class="clear">Clear</th></tr></tfoot></table></div><div style="display: none;" class="datepicker-years"><table class="table-condensed"><thead><tr><th style="visibility: visible;" class="prev"><i class="icon-arrow-left"></i></th><th colspan="5" class="datepicker-switch">2010-2019</th><th style="visibility: visible;" class="next"><i class="icon-arrow-right"></i></th></tr></thead><tbody><tr><td colspan="7"><span class="year old">2009</span><span class="year">2010</span><span class="year">2011</span><span class="year">2012</span><span class="year active">2013</span><span class="year">2014</span><span class="year">2015</span><span class="year">2016</span><span class="year">2017</span><span class="year">2018</span><span class="year">2019</span><span class="year new">2020</span></td></tr></tbody><tfoot><tr><th style="display: none;" colspan="7" class="today">Today</th></tr><tr><th style="display: none;" colspan="7" class="clear">Clear</th></tr></tfoot></table></div></div></div>
                            </div>
                        </div>
                        <div class="widget_content">
                            <h5><i class="icon-reorder"></i> Latest Notifications</h5>
                            <div class="sidebar_widget">
                                <div class="alert">
                                    <button type="button" class="close" data-dismiss="alert"><i class="icon-remove"></i></button>
                                    <strong>Warning!</strong><br> Best check yo self...
                                </div>
                                <div class="alert alert-error">
                                    <button type="button" class="close" data-dismiss="alert"><i class="icon-remove"></i></button>
                                    <strong>Oh snap!</strong><br> Change a few things up...
                                </div>
                            </div>
                        </div>
                        <div class="widget_content">
                            <h5><i class="icon-reorder"></i> Sidebar Forms</h5>
                            <div class="sidebar_widget">
                                <div class="row-fluid">
                                    <div class="sidebar_field">
                                        <input class="span12" name="standard" placeholder="Standard input" type="text">
                                    </div>
                                    <div class="sidebar_field">
                                        <div class="row-fluid">
                                            <div class="span4">
                                                <input class="span12" name="standard" placeholder=".span3" type="text">
                                            </div>
                                            <div class="span4">
                                                <input class="span12" name="standard" placeholder=".span3" type="text">
                                            </div>
                                            <div class="span4">
                                                <input class="span12" name="standard" placeholder=".span3" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sidebar_field control-group warning">
                                        <input class="span12" name="standard" placeholder="Another" type="text">
                                    </div>
                                    <div class="sidebar_field control-group error">
                                        <input class="span12" name="standard" placeholder="Standard input" type="text">
                                    </div>
                                    <div class="sidebar_field control-group success">
                                        <input class="span12" name="standard" placeholder="Standard input" type="text">
                                    </div>
                                    <div class="sidebar_field">
                                        <div class="span12 no-search">
                                            <select style="display: none;" id="selLID" class="chosen chzn-done">
                                                <option selected="selected">Show all results</option>
                                                <option>Show results</option>
                                                <option>Show another results</option>
                                                <option>Only mine</option>
                                                <option>Display none</option>
                                            </select><div title="" style="width: 208px;" class="chzn-container chzn-container-single" id="selLID_chzn"><a href="javascript:void(0)" class="chzn-single" tabindex="-1"><span>Show all results</span><div><b></b></div></a><div class="chzn-drop" style="left:-9000px;"><div class="chzn-search"><input autocomplete="off" type="text"></div><ul class="chzn-results"><li id="selLID_chzn_o_0" class="active-result result-selected" style="">Show all results</li><li id="selLID_chzn_o_1" class="active-result" style="">Show results</li><li id="selLID_chzn_o_2" class="active-result" style="">Show another results</li><li id="selLID_chzn_o_3" class="active-result" style="">Only mine</li><li id="selLID_chzn_o_4" class="active-result" style="">Display none</li></ul></div></div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="sidebar_field">
                                        <div class="span12">
                                            <select style="display: none;" id="selKM7" class="chosen chzn-done">
                                                <option selected="selected">Show all results</option>
                                                <option>Show results</option>
                                                <option>Show another results</option>
                                                <option>Only mine</option>
                                                <option>Display none</option>
                                            </select><div title="" style="width: 208px;" class="chzn-container chzn-container-single" id="selKM7_chzn"><a href="javascript:void(0)" class="chzn-single" tabindex="-1"><span>Show all results</span><div><b></b></div></a><div class="chzn-drop" style="left:-9000px;"><div class="chzn-search"><input autocomplete="off" type="text"></div><ul class="chzn-results"><li id="selKM7_chzn_o_0" class="active-result result-selected" style="">Show all results</li><li id="selKM7_chzn_o_1" class="active-result" style="">Show results</li><li id="selKM7_chzn_o_2" class="active-result" style="">Show another results</li><li id="selKM7_chzn_o_3" class="active-result" style="">Only mine</li><li id="selKM7_chzn_o_4" class="active-result" style="">Display none</li></ul></div></div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="sidebar_buttons align_right">
                                    <a href="#" class="btn blue">Save</a>
                                    <a href="#" class="btn grey">Cancel</a>
                                </div>
                            </div>
                        </div>
                        <div class="widget_content">
                            <h5><i class="icon-reorder"></i> Sidebar Statistics Earnings</h5>
                            <div class="sidebar_widget">
                                <div class="sidebar_buttons align_right">
                                    <a href="#" class="btn red">Update</a>
                                    <a href="#" class="btn blue">Settings</a>
                                </div>
                                <div class="sidebar_chart" id="sidebarchart" style="height: 120px; padding: 0px; position: relative;"><canvas height="120" width="296" class="base"></canvas><canvas style="position: absolute; left: 0px; top: 0px;" height="120" width="296" class="overlay"></canvas><div class="tickLabels" style="font-size:smaller"><div class="xAxis x1Axis" style="color:#545454"><div class="tickLabel" style="position:absolute;text-align:center;left:22px;top:105px;width:21px">Jan</div><div class="tickLabel" style="position:absolute;text-align:center;left:45px;top:105px;width:21px">Feb</div><div class="tickLabel" style="position:absolute;text-align:center;left:66px;top:105px;width:21px">Mar</div><div class="tickLabel" style="position:absolute;text-align:center;left:90px;top:105px;width:21px">Apr</div><div class="tickLabel" style="position:absolute;text-align:center;left:113px;top:105px;width:21px">May</div><div class="tickLabel" style="position:absolute;text-align:center;left:136px;top:105px;width:21px">Jun</div><div class="tickLabel" style="position:absolute;text-align:center;left:159px;top:105px;width:21px">Jul</div><div class="tickLabel" style="position:absolute;text-align:center;left:182px;top:105px;width:21px">Aug</div><div class="tickLabel" style="position:absolute;text-align:center;left:206px;top:105px;width:21px">Sep</div><div class="tickLabel" style="position:absolute;text-align:center;left:229px;top:105px;width:21px">Oct</div><div class="tickLabel" style="position:absolute;text-align:center;left:252px;top:105px;width:21px">Nov</div><div class="tickLabel" style="position:absolute;text-align:center;left:275px;top:105px;width:21px">Dec</div></div><div class="yAxis y1Axis" style="color:#545454"><div class="tickLabel" style="position:absolute;text-align:right;top:84px;right:274px;width:22px">0</div><div class="tickLabel" style="position:absolute;text-align:right;top:56px;right:274px;width:22px">1000</div><div class="tickLabel" style="position:absolute;text-align:right;top:28px;right:274px;width:22px">2000</div><div class="tickLabel" style="position:absolute;text-align:right;top:0px;right:274px;width:22px">3000</div></div></div></div>
                            </div>
                        </div>
                        <div class="widget_content">
                            <h5><i class="icon-reorder"></i> Tags input</h5>
                            <div class="sidebar_widget">
                                <input style="display: none;" name="tags" id="tags" value="These,are,tags"><div style="width: 300px; min-height: 100px; height: 100%;" id="tags_tagsinput" class="tagsinput"><span class="tag"><span>These&nbsp;&nbsp;</span><a title="Removing tag" href="#">x</a></span><span class="tag"><span>are&nbsp;&nbsp;</span><a title="Removing tag" href="#">x</a></span><span class="tag"><span>tags&nbsp;&nbsp;</span><a title="Removing tag" href="#">x</a></span><div id="tags_addTag"><input style="color: rgb(102, 102, 102); width: 80px;" id="tags_tag" value="add a tag" data-default="add a tag"></div><div class="tags_clear"></div></div>
                            </div>
                        </div>
                        <div class="widget_content">
                            <h5><i class="icon-reorder"></i> Sidebar Statistic Visitors</h5>
                            <div class="sidebar_widget">
                                <div class="sidebar_buttons align_right">
                                    <a href="#" class="btn grey">Update</a>
                                    <a href="#" class="btn green">Settings</a>
                                </div>
                                <div class="sidebar_chart" id="sidebarchart2" style="height: 120px; padding: 0px; position: relative;"><canvas height="120" width="296" class="base"></canvas><canvas style="position: absolute; left: 0px; top: 0px;" height="120" width="296" class="overlay"></canvas><div class="tickLabels" style="font-size:smaller"><div class="xAxis x1Axis" style="color:#545454"><div class="tickLabel" style="position:absolute;text-align:center;left:22px;top:105px;width:21px">Jan</div><div class="tickLabel" style="position:absolute;text-align:center;left:45px;top:105px;width:21px">Feb</div><div class="tickLabel" style="position:absolute;text-align:center;left:66px;top:105px;width:21px">Mar</div><div class="tickLabel" style="position:absolute;text-align:center;left:90px;top:105px;width:21px">Apr</div><div class="tickLabel" style="position:absolute;text-align:center;left:113px;top:105px;width:21px">May</div><div class="tickLabel" style="position:absolute;text-align:center;left:136px;top:105px;width:21px">Jun</div><div class="tickLabel" style="position:absolute;text-align:center;left:159px;top:105px;width:21px">Jul</div><div class="tickLabel" style="position:absolute;text-align:center;left:182px;top:105px;width:21px">Aug</div><div class="tickLabel" style="position:absolute;text-align:center;left:206px;top:105px;width:21px">Sep</div><div class="tickLabel" style="position:absolute;text-align:center;left:229px;top:105px;width:21px">Oct</div><div class="tickLabel" style="position:absolute;text-align:center;left:252px;top:105px;width:21px">Nov</div><div class="tickLabel" style="position:absolute;text-align:center;left:275px;top:105px;width:21px">Dec</div></div><div class="yAxis y1Axis" style="color:#545454"><div class="tickLabel" style="position:absolute;text-align:right;top:84px;right:274px;width:22px">0</div><div class="tickLabel" style="position:absolute;text-align:right;top:56px;right:274px;width:22px">1000</div><div class="tickLabel" style="position:absolute;text-align:right;top:28px;right:274px;width:22px">2000</div><div class="tickLabel" style="position:absolute;text-align:right;top:0px;right:274px;width:22px">3000</div></div></div></div>
                            </div>
                        </div>
                        <div class="widget_content">
                            <h5><i class="icon-reorder"></i> Sidebar Forms With Label</h5>
                            <div class="sidebar_widget">
                                <div class="row-fluid">
                                    <div class="form_row">
                                        <label class="field_name">Name</label>
                                        <div class="field">
                                            <input class="span12" name="standard" placeholder="Standard input" type="text">
                                        </div>
                                    </div>
                                    <div class="form_row">
                                        <label class="field_name">Grid input</label>
                                        <div class="field">
                                            <div class="row-fluid">
                                                <div class="span4">
                                                    <input class="span12" name="standard" placeholder=".span3" type="text">
                                                </div>
                                                <div class="span4">
                                                    <input class="span12" name="standard" placeholder=".span3" type="text">
                                                </div>
                                                <div class="span4">
                                                    <input class="span12" name="standard" placeholder=".span3" type="text">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form_row">
                                        <label class="field_name">Normal label</label>
                                        <div class="field">
                                            <input class="span12" name="standard" placeholder="Standard input" type="text">
                                        </div>
                                    </div>
                                    <div class="form_row">
                                        <label class="field_name">Select</label>
                                        <div class="field">
                                            <div class="span12 no-search">
                                                <select style="display: none;" id="selON4" class="chosen chzn-done">
                                                    <option selected="selected">Show all results</option>
                                                    <option>Show results</option>
                                                    <option>Show another results</option>
                                                    <option>Only mine</option>
                                                    <option>Display none</option>
                                                </select><div title="" style="width: 208px;" class="chzn-container chzn-container-single" id="selON4_chzn"><a href="javascript:void(0)" class="chzn-single" tabindex="-1"><span>Show all results</span><div><b></b></div></a><div class="chzn-drop" style="left:-9000px;"><div class="chzn-search"><input autocomplete="off" type="text"></div><ul class="chzn-results"><li id="selON4_chzn_o_0" class="active-result result-selected" style="">Show all results</li><li id="selON4_chzn_o_1" class="active-result" style="">Show results</li><li id="selON4_chzn_o_2" class="active-result" style="">Show another results</li><li id="selON4_chzn_o_3" class="active-result" style="">Only mine</li><li id="selON4_chzn_o_4" class="active-result" style="">Display none</li></ul></div></div>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="form_row">
                                        <label class="field_name">Select search</label>
                                        <div class="field">
                                            <div class="span12">
                                                <select style="display: none;" id="selNRI" class="chosen chzn-done">
                                                    <option selected="selected">Show all results</option>
                                                    <option>Show results</option>
                                                    <option>Show another results</option>
                                                    <option>Only mine</option>
                                                    <option>Display none</option>
                                                </select><div title="" style="width: 208px;" class="chzn-container chzn-container-single" id="selNRI_chzn"><a href="javascript:void(0)" class="chzn-single" tabindex="-1"><span>Show all results</span><div><b></b></div></a><div class="chzn-drop" style="left:-9000px;"><div class="chzn-search"><input autocomplete="off" type="text"></div><ul class="chzn-results"><li id="selNRI_chzn_o_0" class="active-result result-selected" style="">Show all results</li><li id="selNRI_chzn_o_1" class="active-result" style="">Show results</li><li id="selNRI_chzn_o_2" class="active-result" style="">Show another results</li><li id="selNRI_chzn_o_3" class="active-result" style="">Only mine</li><li id="selNRI_chzn_o_4" class="active-result" style="">Display none</li></ul></div></div>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                                <div class="sidebar_buttons align_right">
                                    <a href="#" class="btn blue">Save</a>
                                    <a href="#" class="btn grey">Cancel</a>
                                </div>
                            </div>
                        </div>
                        <div class="widget_content">
                            <h5><i class="icon-picture"></i> Latest Added Media</h5>
                            <div class="sidebar_widget">
                                <div class="row-fluid">
                                    <div class="span6">
                                        <div class="view">
                                            <div class="image">
                                                <img src="Flatpoint%20-%20Responsive%20Web%20App%20Template_files/preview_02.png" alt="">
                                                <a href="#" class="overlay"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="span6">
                                        <div class="view">
                                            <div class="image">
                                                <img src="Flatpoint%20-%20Responsive%20Web%20App%20Template_files/preview_01.png" alt="">
                                                <a href="#" class="overlay"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                <div class="row-fluid">
                                    <div class="span6">
                                        <div class="view">
                                            <div class="image">
                                                <img src="Flatpoint%20-%20Responsive%20Web%20App%20Template_files/preview_03.png" alt="">
                                                <a href="#" class="overlay"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="span6">
                                        <div class="view">
                                            <div class="image">
                                                <img src="Flatpoint%20-%20Responsive%20Web%20App%20Template_files/preview_04.png" alt="">
                                                <a style="opacity: 0;" href="#" class="overlay"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget_content">
                            <h5>Responsive table in sidebar</h5>
                            <div class="sidebar_widget">
                                <div style="height: 400px;" class="responsive_table_container mCustomScrollbar _mCS_3"><div class="mCustomScrollBox mCS-light" id="mCSB_3" style="position:relative; height:100%; overflow:hidden; max-width:100%;"><div class="mCSB_container" style="position: relative; top: -228px;">
                                    <table data-filter="#filter" class="table footable footable-loaded phone breakpoint">
                                        <thead>
                                            <tr>
                                                <th style="display: none;" data-hide="phone,tablet">#</th>
                                                <th class="footable-first-column" data-class="expand" data-sort-initial="true">Name</th>
                                                <th style="display: none;" data-hide="phone,tablet">Email</th>
                                                <th style="display: none;" data-hide="phone,tablet">Country</th>
                                                <th style="display: none;" data-hide="phone,tablet">Phone</th>
                                                <th class="footable-last-column">Order</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="display: none;">1</td>
                                                <td class="expand footable-first-column">Elliott Walter</td>
                                                <td style="display: none;">dolor.elit.pellentesque@disparturientmontes.net</td>
                                                <td style="display: none;">Antigua and Barbuda</td>
                                                <td style="display: none;">361 9258-951</td>
                                                <td class="footable-last-column"><span class="label label-success">Completed</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">2</td>
                                                <td class="expand footable-first-column">Quinlan Owens</td>
                                                <td style="display: none;">fermentum.vel@nuncidenim.org</td>
                                                <td style="display: none;">South Georgia and The South Sandwich Islands</td>
                                                <td style="display: none;">931 8158-728</td>
                                                <td class="footable-last-column"><span class="label label-success">Completed</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">3</td>
                                                <td class="expand footable-first-column">Vivien Cotton</td>
                                                <td style="display: none;">feugiat.tellus@Sed.co.uk</td>
                                                <td style="display: none;">Algeria</td>
                                                <td style="display: none;">197 7676-514</td>
                                                <td class="footable-last-column"><span class="label label-success">Completed</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">4</td>
                                                <td class="expand footable-first-column">Erica Powell</td>
                                                <td style="display: none;">non@dapibusligula.co.uk</td>
                                                <td style="display: none;">Ireland</td>
                                                <td style="display: none;">393 5416-516</td>
                                                <td class="footable-last-column"><span class="label label-inverse">Shipped</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">5</td>
                                                <td class="expand footable-first-column">Deanna Pope</td>
                                                <td style="display: none;">semper@eleifend.org</td>
                                                <td style="display: none;">Panama</td>
                                                <td style="display: none;">999 6110-505</td>
                                                <td class="footable-last-column"><span class="label label-success">Completed</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">6</td>
                                                <td class="expand footable-first-column">Emerald Harding</td>
                                                <td style="display: none;">dolor@nostraperinceptos.net</td>
                                                <td style="display: none;">Kazakhstan</td>
                                                <td style="display: none;">417 1363-790</td>
                                                <td class="footable-last-column"><span class="label label-inverse">Shipped</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">7</td>
                                                <td class="expand footable-first-column">Edward Brock</td>
                                                <td style="display: none;">velit@lobortisrisus.co.uk</td>
                                                <td style="display: none;">Hungary</td>
                                                <td style="display: none;">286 5864-139</td>
                                                <td class="footable-last-column"><span class="label label-success">Completed</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">8</td>
                                                <td class="expand footable-first-column">Mira Stevenson</td>
                                                <td style="display: none;">arcu@cubiliaCurae;.edu</td>
                                                <td style="display: none;">Dominican Republic</td>
                                                <td style="display: none;">215 3399-583</td>
                                                <td class="footable-last-column"><span class="label label-important">Canceled</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">9</td>
                                                <td class="expand footable-first-column">Daria Leblanc</td>
                                                <td style="display: none;">neque.Morbi.quis@facilisisvitaeorci.ca</td>
                                                <td style="display: none;">Dominica</td>
                                                <td style="display: none;">629 4490-703</td>
                                                <td class="footable-last-column"><span class="label label-warning">Pending</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">10</td>
                                                <td class="expand footable-first-column">Desirae Luna</td>
                                                <td style="display: none;">eleifend.nec.malesuada@mauris.ca</td>
                                                <td style="display: none;">Saint Lucia</td>
                                                <td style="display: none;">259 7274-236</td>
                                                <td class="footable-last-column"><span class="label label-success">Completed</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">11</td>
                                                <td class="expand footable-first-column">Emmanuel Bright</td>
                                                <td style="display: none;">risus.Morbi@faucibusidlibero.ca</td>
                                                <td style="display: none;">Sao Tome and Principe</td>
                                                <td style="display: none;">840 4224-872</td>
                                                <td class="footable-last-column"><span class="label label-inverse">Shipped</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">12</td>
                                                <td class="expand footable-first-column">Raphael Joseph</td>
                                                <td style="display: none;">Sed.eget.lacus@Duisacarcu.co.uk</td>
                                                <td style="display: none;">Nepal</td>
                                                <td style="display: none;">849 9028-695</td>
                                                <td class="footable-last-column"><span class="label label-success">Completed</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">13</td>
                                                <td class="expand footable-first-column">Wendy Newman</td>
                                                <td style="display: none;">vestibulum.neque.sed@euenim.ca</td>
                                                <td style="display: none;">Malawi</td>
                                                <td style="display: none;">883 3850-147</td>
                                                <td class="footable-last-column"><span class="label label-success">Completed</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">14</td>
                                                <td class="expand footable-first-column">Yoshio Webster</td>
                                                <td style="display: none;">mattis.Integer.eu@eutempor.org</td>
                                                <td style="display: none;">Cayman Islands</td>
                                                <td style="display: none;">301 9854-429</td>
                                                <td class="footable-last-column"><span class="label label-important">Canceled</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">15</td>
                                                <td class="expand footable-first-column">Melvin Walsh</td>
                                                <td style="display: none;">dolor.Nulla.semper@Sed.org</td>
                                                <td style="display: none;">Aruba</td>
                                                <td style="display: none;">210 0087-828</td>
                                                <td class="footable-last-column"><span class="label label-inverse">Shipped</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">16</td>
                                                <td class="expand footable-first-column">Anjolie Chan</td>
                                                <td style="display: none;">nec.tempus@interdumfeugiat.org</td>
                                                <td style="display: none;">Wallis and Futuna</td>
                                                <td style="display: none;">866 8448-689</td>
                                                <td class="footable-last-column"><span class="label label-warning">Pending</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">17</td>
                                                <td class="expand footable-first-column">Tarik Ayala</td>
                                                <td style="display: none;">amet.nulla.Donec@purusaccumsaninterdum.org</td>
                                                <td style="display: none;">Angola</td>
                                                <td style="display: none;">340 4050-890</td>
                                                <td class="footable-last-column"><span class="label label-success">Completed</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">18</td>
                                                <td class="expand footable-first-column">Joelle Burch</td>
                                                <td style="display: none;">dignissim@liberoduinec.com</td>
                                                <td style="display: none;">Nepal</td>
                                                <td style="display: none;">915 0919-969</td>
                                                <td class="footable-last-column"><span class="label label-inverse">Shipped</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">19</td>
                                                <td class="expand footable-first-column">Mary Cantrell</td>
                                                <td style="display: none;">Vestibulum.ante@anteiaculisnec.net</td>
                                                <td style="display: none;">Netherlands</td>
                                                <td style="display: none;">241 3641-677</td>
                                                <td class="footable-last-column"><span class="label label-inverse">Shipped</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">20</td>
                                                <td class="expand footable-first-column">Madonna Stewart</td>
                                                <td style="display: none;">rutrum.justo@gravidamaurisut.org</td>
                                                <td style="display: none;">Azerbaijan</td>
                                                <td style="display: none;">157 2041-627</td>
                                                <td class="footable-last-column"><span class="label label-success">Completed</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">21</td>
                                                <td class="expand footable-first-column">Brenda Franks</td>
                                                <td style="display: none;">arcu.Vestibulum@etnetuset.co.uk</td>
                                                <td style="display: none;">Lithuania</td>
                                                <td style="display: none;">911 8566-517</td>
                                                <td class="footable-last-column"><span class="label label-inverse">Shipped</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">22</td>
                                                <td class="expand footable-first-column">Rhiannon Richmond</td>
                                                <td style="display: none;">diam.nunc.ullamcorper@loremvitae.net</td>
                                                <td style="display: none;">Cook Islands</td>
                                                <td style="display: none;">863 1950-055</td>
                                                <td class="footable-last-column"><span class="label label-important">Canceled</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">23</td>
                                                <td class="expand footable-first-column">Stacey Dodson</td>
                                                <td style="display: none;">ipsum.cursus@egestasnuncsed.com</td>
                                                <td style="display: none;">Grenada</td>
                                                <td style="display: none;">371 9613-886</td>
                                                <td class="footable-last-column"><span class="label label-success">Completed</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">24</td>
                                                <td class="expand footable-first-column">Rogan Hobbs</td>
                                                <td style="display: none;">Duis.volutpat@nislelementum.org</td>
                                                <td style="display: none;">Kuwait</td>
                                                <td style="display: none;">713 9596-020</td>
                                                <td class="footable-last-column"><span class="label label-important">Canceled</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">25</td>
                                                <td class="expand footable-first-column">Elmo Patel</td>
                                                <td style="display: none;">Nunc@mollisnec.com</td>
                                                <td style="display: none;">Colombia</td>
                                                <td style="display: none;">620 0784-739</td>
                                                <td class="footable-last-column"><span class="label label-warning">Pending</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">26</td>
                                                <td class="expand footable-first-column">Galena Whitney</td>
                                                <td style="display: none;">risus@nunc.edu</td>
                                                <td style="display: none;">Georgia</td>
                                                <td style="display: none;">526 1536-758</td>
                                                <td class="footable-last-column"><span class="label label-success">Completed</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">27</td>
                                                <td class="expand footable-first-column">Glenna Lowe</td>
                                                <td style="display: none;">neque.non.quam@nisi.net</td>
                                                <td style="display: none;">Northern Mariana Islands</td>
                                                <td style="display: none;">519 5305-718</td>
                                                <td class="footable-last-column"><span class="label label-warning">Pending</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">28</td>
                                                <td class="expand footable-first-column">Geoffrey Woodward</td>
                                                <td style="display: none;">risus.Nulla.eget@Maecenasmalesuadafringilla.co.uk</td>
                                                <td style="display: none;">Australia</td>
                                                <td style="display: none;">284 7520-606</td>
                                                <td class="footable-last-column"><span class="label label-warning">Pending</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">29</td>
                                                <td class="expand footable-first-column">Ocean Justice</td>
                                                <td style="display: none;">id.risus.quis@elementum.edu</td>
                                                <td style="display: none;">Israel</td>
                                                <td style="display: none;">367 2389-779</td>
                                                <td class="footable-last-column"><span class="label label-warning">Pending</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">30</td>
                                                <td class="expand footable-first-column">Quynn Cain</td>
                                                <td style="display: none;">Duis.a@acnullaIn.org</td>
                                                <td style="display: none;">American Samoa</td>
                                                <td style="display: none;">817 3896-710</td>
                                                <td class="footable-last-column"><span class="label label-success">Completed</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">31</td>
                                                <td class="expand footable-first-column">Chaney Burgess</td>
                                                <td style="display: none;">feugiat.metus@eratVivamusnisi.edu</td>
                                                <td style="display: none;">Turkmenistan</td>
                                                <td style="display: none;">956 0148-998</td>
                                                <td class="footable-last-column"><span class="label label-warning">Pending</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">32</td>
                                                <td class="expand footable-first-column">Carol Ayers</td>
                                                <td style="display: none;">aliquet.odio@Utsemperpretium.net</td>
                                                <td style="display: none;">Pitcairn</td>
                                                <td style="display: none;">468 5204-613</td>
                                                <td class="footable-last-column"><span class="label label-important">Canceled</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">33</td>
                                                <td class="expand footable-first-column">Lydia Simmons</td>
                                                <td style="display: none;">convallis.est@blanditatnisi.com</td>
                                                <td style="display: none;">Mali</td>
                                                <td style="display: none;">697 6544-221</td>
                                                <td class="footable-last-column"><span class="label label-inverse">Shipped</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">34</td>
                                                <td class="expand footable-first-column">Colette Dale</td>
                                                <td style="display: none;">orci@cursusNuncmauris.edu</td>
                                                <td style="display: none;">Italy</td>
                                                <td style="display: none;">800 6654-189</td>
                                                <td class="footable-last-column"><span class="label label-success">Completed</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">35</td>
                                                <td class="expand footable-first-column">Jolie Frazier</td>
                                                <td style="display: none;">Aliquam@apurus.edu</td>
                                                <td style="display: none;">Croatia</td>
                                                <td style="display: none;">404 6104-319</td>
                                                <td class="footable-last-column"><span class="label label-warning">Pending</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">36</td>
                                                <td class="expand footable-first-column">Shaeleigh Stark</td>
                                                <td style="display: none;">arcu.Nunc@parturient.com</td>
                                                <td style="display: none;">Spain</td>
                                                <td style="display: none;">193 4129-531</td>
                                                <td class="footable-last-column"><span class="label label-success">Completed</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">37</td>
                                                <td class="expand footable-first-column">Lamar Little</td>
                                                <td style="display: none;">Phasellus.libero.mauris@turpisegestasAliquam.co.uk</td>
                                                <td style="display: none;">American Samoa</td>
                                                <td style="display: none;">198 9419-738</td>
                                                <td class="footable-last-column"><span class="label label-warning">Pending</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">38</td>
                                                <td class="expand footable-first-column">Eleanor Hooper</td>
                                                <td style="display: none;">diam.luctus@nislNullaeu.org</td>
                                                <td style="display: none;">Uzbekistan</td>
                                                <td style="display: none;">105 6754-654</td>
                                                <td class="footable-last-column"><span class="label label-important">Canceled</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">39</td>
                                                <td class="expand footable-first-column">Minerva Vargas</td>
                                                <td style="display: none;">eget.magna@euismodetcommodo.org</td>
                                                <td style="display: none;">Mali</td>
                                                <td style="display: none;">358 6906-656</td>
                                                <td class="footable-last-column"><span class="label label-warning">Pending</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">40</td>
                                                <td class="expand footable-first-column">Hedda Hardy</td>
                                                <td style="display: none;">nibh.Phasellus.nulla@ornare.org</td>
                                                <td style="display: none;">Saint Helena</td>
                                                <td style="display: none;">774 6203-159</td>
                                                <td class="footable-last-column"><span class="label label-warning">Pending</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">41</td>
                                                <td class="expand footable-first-column">Alexis Burks</td>
                                                <td style="display: none;">Nunc.ullamcorper.velit@Maecenasiaculisaliquet.com</td>
                                                <td style="display: none;">Martinique</td>
                                                <td style="display: none;">949 3183-421</td>
                                                <td class="footable-last-column"><span class="label label-important">Canceled</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">42</td>
                                                <td class="expand footable-first-column">Ulla Charles</td>
                                                <td style="display: none;">egestas.Duis@quis.com</td>
                                                <td style="display: none;">Niger</td>
                                                <td style="display: none;">396 4732-167</td>
                                                <td class="footable-last-column"><span class="label label-warning">Pending</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">43</td>
                                                <td class="expand footable-first-column">Iliana Greer</td>
                                                <td style="display: none;">Integer.eu@egestaslaciniaSed.co.uk</td>
                                                <td style="display: none;">Azerbaijan</td>
                                                <td style="display: none;">749 8021-247</td>
                                                <td class="footable-last-column"><span class="label label-important">Canceled</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">44</td>
                                                <td class="expand footable-first-column">Whilemina Bryant</td>
                                                <td style="display: none;">turpis.vitae.purus@enim.co.uk</td>
                                                <td style="display: none;">Fiji</td>
                                                <td style="display: none;">767 0158-949</td>
                                                <td class="footable-last-column"><span class="label label-success">Completed</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">45</td>
                                                <td class="expand footable-first-column">Ivy Aguilar</td>
                                                <td style="display: none;">eu@tempus.org</td>
                                                <td style="display: none;">Seychelles</td>
                                                <td style="display: none;">187 1693-186</td>
                                                <td class="footable-last-column"><span class="label label-warning">Pending</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">46</td>
                                                <td class="expand footable-first-column">Wang Meyers</td>
                                                <td style="display: none;">lorem.ut.aliquam@ametornare.net</td>
                                                <td style="display: none;">Bulgaria</td>
                                                <td style="display: none;">275 2914-552</td>
                                                <td class="footable-last-column"><span class="label label-important">Canceled</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">47</td>
                                                <td class="expand footable-first-column">Melinda Benjamin</td>
                                                <td style="display: none;">elit.Aliquam.auctor@vitae.ca</td>
                                                <td style="display: none;">Burundi</td>
                                                <td style="display: none;">290 8893-074</td>
                                                <td class="footable-last-column"><span class="label label-warning">Pending</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">48</td>
                                                <td class="expand footable-first-column">Keelie Grant</td>
                                                <td style="display: none;">nec@veliteusem.com</td>
                                                <td style="display: none;">Kiribati</td>
                                                <td style="display: none;">221 2115-976</td>
                                                <td class="footable-last-column"><span class="label label-important">Canceled</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">49</td>
                                                <td class="expand footable-first-column">Ulysses Jensen</td>
                                                <td style="display: none;">vel.sapien.imperdiet@estNunc.net</td>
                                                <td style="display: none;">Timor-leste</td>
                                                <td style="display: none;">884 2141-965</td>
                                                <td class="footable-last-column"><span class="label label-important">Canceled</span></td>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">50</td>
                                                <td class="expand footable-first-column">Hilda Camacho</td>
                                                <td style="display: none;">velit.justo.nec@malesuada.ca</td>
                                                <td style="display: none;">Cape Verde</td>
                                                <td style="display: none;">330 7032-511</td>
                                                <td class="footable-last-column"><span class="label label-success">Completed</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div><div class="mCSB_scrollTools" style="position: absolute; display: block;"><div class="mCSB_draggerContainer"><div class="mCSB_dragger" style="position: absolute; height: 73px; top: 42px;" oncontextmenu="return false;"><div class="mCSB_dragger_bar" style="position: relative; line-height: 73px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div>
                            </div>
                        </div>
                    </div>

                    <div style="display: none;" class="tab-box no_padding" id="second">
                        <div class="widget_content">
                            <h5><i class="icon-picture"></i> Latest Added Media</h5>
                            <div class="sidebar_widget">
                                <div class="row-fluid">
                                    <div class="span6">
                                        <div class="view">
                                            <div class="image">
                                                <img src="Flatpoint%20-%20Responsive%20Web%20App%20Template_files/preview_02.png" alt="">
                                                <a href="#" class="overlay"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="span6">
                                        <div class="view">
                                            <div class="image">
                                                <img src="Flatpoint%20-%20Responsive%20Web%20App%20Template_files/preview_01.png" alt="">
                                                <a href="#" class="overlay"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                <div class="row-fluid">
                                    <div class="span6">
                                        <div class="view">
                                            <div class="image">
                                                <img src="Flatpoint%20-%20Responsive%20Web%20App%20Template_files/preview_03.png" alt="">
                                                <a href="#" class="overlay"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="span6">
                                        <div class="view">
                                            <div class="image">
                                                <img src="Flatpoint%20-%20Responsive%20Web%20App%20Template_files/preview_04.png" alt="">
                                                <a href="#" class="overlay"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="display: none;" class="tab-box no_padding" id="third">
                        <div class="widget_content">
                            <h5><i class="icon-reorder"></i> Sidebar Forms</h5>
                            <div class="sidebar_widget">
                                <div class="row-fluid">
                                    <div class="sidebar_field">
                                        <input class="span12" name="standard" placeholder="Standard input" type="text">
                                    </div>
                                    <div class="sidebar_field">
                                        <div class="row-fluid">
                                            <div class="span4">
                                                <input class="span12" name="standard" placeholder=".span3" type="text">
                                            </div>
                                            <div class="span4">
                                                <input class="span12" name="standard" placeholder=".span3" type="text">
                                            </div>
                                            <div class="span4">
                                                <input class="span12" name="standard" placeholder=".span3" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sidebar_field control-group warning">
                                        <input class="span12" name="standard" placeholder="Another" type="text">
                                    </div>
                                    <div class="sidebar_field control-group error">
                                        <input class="span12" name="standard" placeholder="Standard input" type="text">
                                    </div>
                                    <div class="sidebar_field control-group success">
                                        <input class="span12" name="standard" placeholder="Standard input" type="text">
                                    </div>
                                    <div class="sidebar_field">
                                        <div class="span12 no-search">
                                            <select style="display: none;" id="sel7PJ" class="chosen chzn-done">
                                                <option selected="selected">Show all results</option>
                                                <option>Show results</option>
                                                <option>Show another results</option>
                                                <option>Only mine</option>
                                                <option>Display none</option>
                                            </select><div title="" style="width: 220px;" class="chzn-container chzn-container-single" id="sel7PJ_chzn"><a href="javascript:void(0)" class="chzn-single" tabindex="-1"><span>Show all results</span><div><b></b></div></a><div class="chzn-drop" style="left:-9000px;"><div class="chzn-search"><input autocomplete="off" type="text"></div><ul class="chzn-results"><li id="sel7PJ_chzn_o_0" class="active-result result-selected" style="">Show all results</li><li id="sel7PJ_chzn_o_1" class="active-result" style="">Show results</li><li id="sel7PJ_chzn_o_2" class="active-result" style="">Show another results</li><li id="sel7PJ_chzn_o_3" class="active-result" style="">Only mine</li><li id="sel7PJ_chzn_o_4" class="active-result" style="">Display none</li></ul></div></div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="sidebar_field">
                                        <div class="span12">
                                            <select style="display: none;" id="selO0R" class="chosen chzn-done">
                                                <option selected="selected">Show all results</option>
                                                <option>Show results</option>
                                                <option>Show another results</option>
                                                <option>Only mine</option>
                                                <option>Display none</option>
                                            </select><div title="" style="width: 220px;" class="chzn-container chzn-container-single" id="selO0R_chzn"><a href="javascript:void(0)" class="chzn-single" tabindex="-1"><span>Show all results</span><div><b></b></div></a><div class="chzn-drop" style="left:-9000px;"><div class="chzn-search"><input autocomplete="off" type="text"></div><ul class="chzn-results"><li id="selO0R_chzn_o_0" class="active-result result-selected" style="">Show all results</li><li id="selO0R_chzn_o_1" class="active-result" style="">Show results</li><li id="selO0R_chzn_o_2" class="active-result" style="">Show another results</li><li id="selO0R_chzn_o_3" class="active-result" style="">Only mine</li><li id="selO0R_chzn_o_4" class="active-result" style="">Display none</li></ul></div></div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="sidebar_buttons align_right">
                                    <a href="#" class="btn blue">Save</a>
                                    <a href="#" class="btn grey">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
            
           

            <footer>
                <p>&copy All Right Reserved artfan 2013</p>

            </footer> <!--end footer-->
        
        <?php echo $this->element('sql_dump'); ?>
        <script>
        jQuery('#vmap').vectorMap({
            map:"world_en",
            backgroundColor:null,
            color:"#ffffff",
            hoverOpacity:.7,
            selectedColor:"#2d91ef",
            enableZoom:0,
            showTooltip:1,
            values:sample_data,
            scaleColors:["#8cc3f6","#5c86ac"],
            normalizeFunction:"polynomial",
            onRegionClick:function(){alert("This Region has "+(Math.floor(Math.random()*10)+1)+" users!"
            )}
        });

        jQuery(document).ready(function($) {
            $('.footable').footable();
            $('.responsive_table_container').mCustomScrollbar({
                set_height: 400,
                advanced:{
                  updateOnContentResize: true,
                  updateOnBrowserResize: true
                }
            });

            $('.responsive_table_container_2').mCustomScrollbar({
                set_height: 520,
                advanced:{
                  updateOnContentResize: true,
                  updateOnBrowserResize: true
                }
            });

            $('.inner_sidebar').easytabs({
                animationSpeed: 300,
                collapsible: false,
                updateHash: false
            });
        });
    </script>

        
    <script src="<?php echo $this->base; ?>/js/jquery-ui-1.10.3.js"></script>
    <script src="<?php echo $this->base; ?>/js/bootstrap.js"></script>
    <script src="<?php echo $this->base; ?>/js/jquery.collapsible.min.js"></script>
    <script src="<?php echo $this->base; ?>/js/jquery.mCustomScrollbar.min.js"></script>
    <script src="<?php echo $this->base; ?>/js/jquery.mousewheel.min.js"></script>
    <script src="<?php echo $this->base; ?>/js/jquery.uniform.min.js"></script>
    <script src="<?php echo $this->base; ?>/js/jquery.sparkline.min.js"></script>
    <script src="<?php echo $this->base; ?>/js/chosen.jquery.min.js"></script>
    <script src="<?php echo $this->base; ?>/js/jquery.easytabs.js"></script>
    </body>
</html>
