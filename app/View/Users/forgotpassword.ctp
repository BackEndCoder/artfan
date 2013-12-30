<div class="users form">
    <?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend>Forgot Password<span class="arw7"></span></legend>
            <?php echo $this->Form->input('email'); ?>
    </fieldset>
    <?php echo $this->Form->end('Submit'); ?>
</div>

