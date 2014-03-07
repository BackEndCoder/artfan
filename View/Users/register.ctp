<?php
    $this->Html->addCrumb('Register' , $this->here);
?>
<h3>Register</h3>
<div id="register-container">
    <div id="register-form">
        <div id="register-holder">
        <?php echo $this->Form->create('User'); ?>
        <fieldset>
            <a href="<?php echo $this->Html->url('/users/register_artist/')?>" style="color: #828282;font: 12px/26px 'HelveticaNeueRegular',Helvetica,Arial,sans-serif;"><b>Looking for artist sign-ups? Click here!</b><a/>
                <?php
                echo $this->Form->input('username');
                echo $this->Form->input('email');
                echo $this->Form->input('password');
                echo $this->Form->input('password_confirmation', array('type' => 'password'));
                echo $this->Form->input('address', array('type' => 'textarea'));
                echo $this->Form->input('contact_number');
                //echo $this->Form->input('Account Type', array('type' => 'radio', 'options' => array(2 => 'Artist & Customer', 3 => 'Customer')));
                //echo $this->Form->hidden( 'role_id', array( 'value' => '2' ) );
                ?>
        </fieldset>
        <br />
        <?php echo $this->Form->end('Submit'); ?>
        </div>
    </div>
</div>

