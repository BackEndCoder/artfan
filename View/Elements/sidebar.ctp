<?php
$this->start('sidebar.block');
?>
<aside>
    <div class="aside-box">
        <div class="aside-box-title">
            <h2>Shop by...</h2>
        </div>
        <?php
            // Giftcard ids fromt he database to hide from view
            $category_gift_id = 11;
            $color_gift_id = 12;
            $style_gift_id = 11;
        ?>
        <div class="aside-contain">
            <ul class="accordion"  id="accordion">
                <?php
                    $categories = $this->requestAction('/categories/getCategories/');
                ?>
                <li><span class="drop"><img src="<?php echo $this->base; ?>/img/drop.png" width="7" height="16" alt="drop" /></span><a href="#">Category </a>
                    <ul>
                        <?php foreach ($categories as $cat_id => $category): ?>
                            <?php if ($category_gift_id != $cat_id) { ?>
                            <li><?php echo $this->Html->link($category, array('plugin' => null, 'controller' => 'art', 'action' => 'index', 'category' => $cat_id)); ?>
                            <?php }endforeach; ?>
                    </ul>
                </li>
                <?php
                    $colors = $this->requestAction('/colors/getColors/');
                ?>
                <li><span class="drop"><img src="<?php echo $this->base; ?>/img/drop.png" width="7" height="16" alt="drop" /></span><a href="#">Colors</a>
                    <ul>
                        <?php foreach ($colors as $color_id => $color): ?>
                            <?php if ($color_id != $color_gift_id) { ?>
                            <li><?php echo $this->Html->link($color, array('plugin' => null, 'controller' => 'art', 'action' => 'index', 'color' => $color_id)); ?>
                            <?php }endforeach; ?>
                    </ul>
                </li>
                <?php
                    $styles = $this->requestAction('/styles/getStyles/');
                ?>
                <li><span class="drop"><img src="<?php echo $this->base; ?>/img/drop.png" width="7" height="16" alt="drop" /></span><a href="#">Styles</a>
                    <ul>
                        <?php foreach ($styles as $style_id => $style): ?>
                            <?php if ($style_id != $style_gift_id) { ?>
                            <li><?php echo $this->Html->link($style, array('plugin' => null, 'controller' => 'art', 'action' => 'index', 'style' => $style_id)); ?>
                            <?php }endforeach; ?>
                    </ul>
                </li>
                <li><span class="drop"><img src="<?php echo $this->base; ?>/img/drop.png" width="7" height="16" alt="drop" /></span><a href="#">Prices</a>
                    <ul>
                        <?php /* hard coded ranges */ ?>
                        <li><?php echo $this->Html->link('Less than £250',  array('plugin' => null, 'controller' => 'art', 'action' => 'price', '1')); ?></li>
                        <li><?php echo $this->Html->link('£250 - £500', array('plugin' => null, 'controller' => 'art', 'action' => 'price', '2')); ?></li>
                        <li><?php echo $this->Html->link('£500 - £1,000',  array('plugin' => null, 'controller' => 'art', 'action' => 'price', '3')); ?></li>
                        <li><?php echo $this->Html->link('£1,000 - £2,000', array('plugin' => null, 'controller' => 'art', 'action' => 'price', '4')); ?></li>
                        <li><?php echo $this->Html->link('£2,000 - £10,000',  array('plugin' => null, 'controller' => 'art', 'action' => 'price', '5')); ?></li>
                        <li><?php echo $this->Html->link('More than £10,000',  array('plugin' => null, 'controller' => 'art', 'action' => 'price', '6')); ?></li>
                    </ul>
                </li>
            </ul>
            <div class="clr"></div>
        </div>
    </div>
    <div class="aside-box">
        <div class="aside-box-title">
            <h2>Art fan?</h2>
        </div>
        <div class="aside-contain">
            <p>Receive our monthly newsletter with new artwork, new artists and offers!</p>
            <form id="add_newsletter" method="post" action="/Newsletters/add">
                <p>
                    <input type="text" name ="email" placeholder="email address" />
                </p>
                <span class="btn">
                    <input type="submit" value="Signup"  id="btn"/>
                </span>
            </form>

            <div class="clr"></div>
        </div>
    </div>
    <?php
        $perfectgiftPage = $this->requestAction('/content_manager/contents/getContent/4');
    ?>
    <div class="aside-box">
        <div class="aside-box-title">
            <h2>The Perfect Gift</h2>
        </div>
        <div class="aside-contain">
            <p><?php echo nl2br($perfectgiftPage['Content']['content']); ?></p>
            <span class="btn"><?php echo $this->Html->link('more', array('plugin' => 'content_manager', 'controller' => 'contents', 'action' => 'view', 'contentSlug' => 'the-perfect-page')); ?> </span>
            <div class="clr"></div>
        </div>
    </div>
    <!-- Testimonials -->
    <?php
        $testimonials = $this->requestAction('/testimonials/getTestimonials/');
    ?>
    <div class="aside-box">
        <div class="aside-box-title">
            <h2>Testimonials</h2>
        </div>
        <div id="testimonials"class="aside-contain">
            <div class="home_testmonials">
                <ul>
                    <?php foreach ($testimonials as $testimonial): ?>
                        <li><p>"<?php echo $testimonial['Testimonial']['testimonial_content']; ?>"</p>
                            <h6 class="group"><strong><?php echo $testimonial['Testimonial']['testimonial_name']; ?></strong></h6></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="clr"></div>
        </div>
    </div>
</aside>
<?php
$this->end();

echo $this->fetch('sidebar.block');
?>

<script type="text/javascript">
    //var root = location.protocol + '//' + location.hostname;
    var root = '<?php echo $this->Html->url('/'); ?>';
    //alert(root);
    $('#add_newsletter').submit(function(e) {
        e.preventDefault();
        $.ajax({
            url: root + "Newsletters/add",
            type: 'POST',
            data: $(this).serialize(),
            success: function(result) {
                if (result == 'success')
                    alert('Thank you for subscribing to our newsletter!');
                else
                    alert('Thank you for subscribing to our newsletter!');
            }
        });
    });
</script>