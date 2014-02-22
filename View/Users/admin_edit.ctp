<div class="users form">
    <?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend>Edit User <span class="ar"></span></legend>
        <div class="actions group">
            <ul>
                <li><?php echo $this->Html->link('List Users', array('action' => 'index')); ?></li>
            </ul>
        </div>

        <?php
        echo $this->Form->input('first_name');
        echo $this->Form->input('last_name');
        echo $this->Form->input('username');
        echo $this->Form->input('email',array('id' => 'email_user'));
        echo $this->Form->input('address');
        ?>
    </fieldset>
    <?php echo $this->Form->end('Submit'); ?>
</div>
