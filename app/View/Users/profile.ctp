<div id="users" class="users view">
    <h2>My Profile<span class="arro"></span></h2>

    <?php echo $this->Form->create('User', array('type' => 'file')); ?>
    <?php echo $this->Form->hidden('id'); ?>
    <div>
        <?php echo $this->Form->input('first_name'); ?>
    </div>
    <div>
        <?php echo $this->Form->input('last_name'); ?>
    </div>
    <div>
        <?php echo $this->Form->input('age'); ?>
    </div>
    <div>
        <?php echo $this->Form->input('email'); ?>
    </div>
    <div>
        <?php echo $this->Form->input('address'); ?>
    </div>
    <div>
        <?php echo $this->Form->input('inspired', array('type'=>'textarea')); ?>
    </div>
    <div>
        <?php echo $this->Form->input('about', array('type'=>'textarea')); ?>
    </div>
    <div>
        <div id="file">Browse</div>
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
<script>
var wrapper = $('<div/>').css({height:0,width:0,'overflow':'hidden'});
var fileInput = $(':file').wrap(wrapper);

fileInput.change(function(){
    $this = $(this);
    $('#file').text($this.val());
})

$('#file').click(function(){
    fileInput.click();
}).show();
</script
