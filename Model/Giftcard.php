<?php
class Giftcard extends AppModel {

    public $belongsTo = array(
        'User' => array(
            'className' => 'User',
            'dependent' => true,
            'foreignKey' => 'author'
        	)
		);

 	public $validate = array(
 		'title' => array(
 			'rule' => 'notEmpty',
 			'message' => 'Title cannot be left blank.'
 			),
 		'description' => array(
 			'rule' => 'notEmpty',
 			'message' => 'Description cannot be left blank.'
 			),
 		'price' => array(
 			'rule' => 'notEmpty',
 			'message' => 'Price cannot be left blank.'
 			),
 		);

 	function getGiftCards() {
        return $this->find('all',
            array(
            	'limit' => 8,
            	'order' => array('Giftcard.id DESC')
            	)
            );
    }
}