<?php

class Newsletter extends AppModel {

    public $validate = array(
        'email' => array (
            array('rule' => 'email',
                  'required'  => true,
                  'message' => 'Please supply a valid email address.'),
            array('rule' => 'isUnique',
                  'required'  => true,
                  'message' => 'You are already signed up!')
        )
    );

}

?>