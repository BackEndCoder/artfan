<?php echo $this->Form->create('Page'); ?>
<fieldset>
    <legend>Add Page<span class="arrowss1177"></span></legend>
    <div class="actions">

        <ul>
            <li><?php echo $this->Html->link('List Pages', array('action' => 'index')); ?></li>
        </ul>
    </div>
    <div class="clearfix"></div>

    <?php
    echo $this->Form->input('title', array('class' => 'clearfix'));
    echo $this->Form->input('content', array('type'=>'textarea'));
    ?>
</fieldset>
<?php echo $this->Form->end('Submit'); ?>
