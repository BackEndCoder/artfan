<div class="users view">
    <h2>Change Password<span class="arro"></span></h2>
    
    <?php echo $this->Form->create(array('class' => '')); ?>
    <div>
        <label for="currentPassword">Current Password</label>
        <input type="text" name="currentPassword" id="currentPassword" />
    </div>
    <div>
        <label for="newPassword">New Password</label>
        <input type="text" name="newPassword" id="newPassword" />
    </div>
    <div>
        <label for="confirmPassword">Confirm Password</label>
        <input type="text" name="confirmPassword" id="confirmPassword" />
    </div>
    <?php echo $this->Form->submit('Save', array('class' => 'btn')); ?>
    <?php echo $this->Form->end(); ?>

</div>
