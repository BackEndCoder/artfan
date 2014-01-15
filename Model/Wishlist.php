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
class Wishlist extends AppModel {

    public $belongsTo = array(
        'Product' => array(
            'className' => 'Product',
            'dependent' => true,
            'foreignKey' => 'product_id'
        ),
        'User' => array(
            'className' => 'User',
            'dependent' => true,
            'foreignKey' => 'user_id'
    ));
}

?>
