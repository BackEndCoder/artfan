<h1>Add inspired image</h1>
<?php
    echo $this->Form->create('Inspired');
    echo $this->Form->input('title');
    echo $this->Form->input('body', array('rows' => '3'));
    echo $this->Form->input('image');
    echo $this->Form->end('Save Inspired Artwork');
?>


