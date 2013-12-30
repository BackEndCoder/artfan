<?php
    $this->Html->addCrumb('Login' , $this->here);
?>

<?php ?>

<script type="text/javascript">

    $(document).ready(function() {

        $(".slidingDiv").hide();
        $(".show_hide").show();

        $('.show_hide').click(function() {
            $(".slidingDiv").slideToggle();
        });

    });

</script>
<div class="content_register">
    <div class="log">
        <div class="log_in">
            <h1>LOG IN</h1><br/>
            <center><span class="form_title">I have a Artfan account</span><br/>
            <span class="form_title1">Please login to continue </span></center>

            <?php echo $this->Form->create(array('class' => 'form-horizontal form_login')); ?>

            <div class="control-group">                    

                <?php echo $this->Form->input('username', array('placeholder' => 'Username')); ?>


            </div>
            <div class="control-group">                    

                <?php echo $this->Form->input('password', array('placeholder' => 'Password')); ?>


            </div>
            <div class="control-group">
                <div class="controls">
                    <label class="checkbox">
                        <input type="checkbox"> Remember me
                    </label>
                    <?php echo $this->Form->submit('Login & Continue', array('class' => 'btn')); ?>
                    <?php echo $this->Form->end(); ?>

                </div>
            </div>
        </div>
    </div>

    <div class="resgister_display">

        <div class="register">
            <h1>REGISTER</h1><br/>

            <center><span class="form_title1">I don't have a Artfan account</span><br/>
            <span class="form_title1">Please enter login information to create an account and continue</span></center><br/>
            <a href="#" class="show_hide">Register</a>
            <div class="slidingDiv">
                <?php echo $this->Form->create('User', array('action' => '/register', 'id' => 'UserRegisterForm1', 'class' => 'form-horizontal form_login')); ?>                

                <div class="control-group">
                    <?php echo $this->Form->input('username', array('placeholder' => 'Username')); ?>
                </div>
                <div class="control-group">
                    <?php echo $this->Form->input('email', array('placeholder' => 'Email')); ?>
                </div>

                <div class="control-group">
                    <?php echo $this->Form->input('password', array('placeholder' => 'Password')); ?>
                </div>
                <div class="control-group">
                    <?php echo $this->Form->input('Confirm Password', array('type' => 'password', 'placeholder' => 'Confirm Password')); ?>
                </div>
                <div class="control-group">
                    <?php echo $this->Form->input('role_id', array('type' => 'radio', 'options' => array(2 => 'seller', 3 => 'buyer'))); ?>
                </div>
                <div class="control-group">
                    <div class="controls">                        
                        <?php echo $this->Form->submit('Register', array('class' => 'btn')); ?>
                    </div>
                </div>

                <?php echo $this->Form->end(); ?>
            </div>

        </div>

    </div>
</div>