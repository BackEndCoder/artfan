<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Users
 *
 * @author Wilson<mailwilson007@gmail.com>
 */
class User extends AppModel {

    public $belongsTo = array(
        'Role' => array(
            'className' => 'Role',
            'dependent' => true,
            'foreignKey' => 'role_id'
        )        
    );

}

?>
