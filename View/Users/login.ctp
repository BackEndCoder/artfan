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

            <center><span class="form_title1">Don't have an Artfan account?</span><br/>
            <span class="form_title1">Please click below to register</span></center><br/>
            <div class="submit">
                <a href="<?php echo $this->Html->url('/users/register'); ?>">
                <div align="center">
                <input type="button" class="btn" value="Register" style="background: none repeat scroll 0 0 #E3007E;cursor: pointer;color: #fff;font: 18px/26px 'HelveticaNeueRegular',Helvetica,Arial,sans-serif;padding: 3px 6px;"/></a>
                </div>
            </div>
            <?php
            /* Just in case it's wanted...
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
            */?>
        </div>

    </div>
</div>