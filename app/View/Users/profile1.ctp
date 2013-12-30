<div id="users" class="users view">
    <h2>Profile<span class="arro"></span></h2>

    <?php echo $this->Form->create('User', array('type' => 'file')); ?>
    <?php echo $this->Form->hidden('id'); ?>
    <div>
        <?php echo $this->Form->input('username'); ?>
    </div>
    <div>
        <?php echo $this->Form->input('first_name'); ?>
    </div>
    <div>
        <?php echo $this->Form->input('last_name'); ?>
    </div>
    <div>
        <?php echo $this->Form->input('email'); ?>
    </div>
    <div>
        <?php echo $this->Form->input('address'); ?>
    </div>
    <div>
        <?php echo $this->Form->input('about', array('type'=>'textarea')); ?>
    </div>
    <div>
        <input type="file" name="data[User][myimage]" id="UserImages">
    </div>
    <div>
        <?php if (!empty($profileimage)) :?>
        <img src="<?php echo $profileimage; ?>" alt="profilePic" />
        <?php endif; ?>
    </div>
    <?php echo $this->Form->submit('Save', array('class' => 'btn')); ?>
    <?php echo $this->Form->end(); ?>

</div>
