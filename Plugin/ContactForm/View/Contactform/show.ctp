<?php
$this->Html->addCrumb('Contact', '/contact');
?>

<style>
    #contact-container {
        width: 670px;
    }

    #contact-container h3 {
        width: 100%;
        padding: 0 0 0 17px;
        margin-left: 0;
        /*font-size: 15px;*/
    }

    #contact-form {
        float: left;
        width: 48%;
        margin-right: 10px;
        margin-left: 20px;
    }

    #contact-form input {
        margin-left: 25px;
        width: 265px;
        margin-top: 0;
    }

    #contact-form textarea {
        margin-left: 25px;
        width: 265px;
    }

    #contact-form label {
        color: #828282;
        font: 14px/26px 'HelveticaNeueRegular',Helvetica,Arial,sans-serif;
        margin-left: 25px;
        margin-bottom: 0;
        width: 100%;
    }

    #form-holder {
        background: rgb(223,222,212);
        border-color: rgb(163,162,137);
        border-style: solid;
        border-width: 1px;
        padding-bottom: 10px;
    }

    #contact-map {
        float: right;
        width: 44%;
    }
</style>


<div id="contact-container">
    <h3>Get in touch if you have any questions!</h3>

<div id="contact-form">
<div id="form-holder">
<?php
 echo $this->Html->css(array(
    '/Contactform/css/Contactform.css'
));

echo $this->Form->create('Contactform.Contactform');

echo $this->Form->input('Contactform.Name', array('label' => __d('contactform', 'Name')));
echo $this->Form->input('Contactform.Mail', array('label' => __d('contactform', 'E-mail')));
echo $this->Form->input('Contactform.Message', array('type' => 'textarea', 'label' => __d('contactform', 'Message')));
//echo $this->Form->label('Contactform.Spamprotection', __d('contactform', 'Spam Protection Test').': '.$calculation.'?');
echo $this->Form->input('Contactform.Spamprotection', array('label' => __d('contactform', 'Spam Protection Test').': '.$calculation.'?', 'autocomplete' => 'off'));
echo '<br />';
echo $this->Form->submit('Submit', array('label' => __d('contactform', 'submit')));

echo $this->Form->end();
?>
</div></div>

<div id="contact-map">
    <iframe width="350" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.uk/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=manchester&amp;aq=&amp;sll=53.800651,-4.064941&amp;sspn=9.820872,23.269043&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=Manchester,+United+Kingdom&amp;z=11&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.co.uk/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=manchester&amp;aq=&amp;sll=53.800651,-4.064941&amp;sspn=9.820872,23.269043&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=Manchester,+United+Kingdom&amp;z=11&amp;iwloc=A" style="color:#0000FF;text-align:left">View Larger Map</a></small>
</div>