<?php echo $this->Form->create('Slider', array('type' => 'file')); ?>
<fieldset>
    <legend><span class="arrowss1177">Edit Slider</span></legend><br/>
    <div class="actions clearfix">

        <ul>
            <li><?php echo $this->Html->link('List Sliders', array('action' => 'index')); ?></li>
        </ul>
    </div>

    <input type="hidden" name="deletedImages" class="deletedImages" />

    <?php
    echo $this->Form->input('title', array('id' => 'input_type'));
    echo $this->Form->input('url', array('id' => 'des_type'));
    ?>
    <input type="file" name="data[Slider][myimage]" id="SliderImages">
    <?php
    if (!empty($imagesList)) {
        foreach ($imagesList as $image) {
            echo "<div>";            
            echo "<img class='sliderImage' src='" . $image . "' alt='sliderImage' width='80' />";

            echo "</div>";
        }
    }
    ?>
</fieldset>
<?php echo $this->Form->end('Submit'); ?>

