<?php echo $this->Form->create('Slider', array('type' => 'file')); ?>
<fieldset>
    <legend>Add Slider<span class="arrowss1177"></span></legend>
    <div class="actions">

        <ul>
            <li><?php echo $this->Html->link('List Sliders', array('action' => 'index')); ?></li>
        </ul>
    </div>
    <div class="clearfix"></div>

    <?php
    echo $this->Form->input('title', array('class' => 'clearfix'));
    echo $this->Form->input('url');
    ?>
    
    <input type="file" name="data[Slider][myimage]" id="SliderImages">
</fieldset>
<?php echo $this->Form->end('Submit'); ?>