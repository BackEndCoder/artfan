<?php
class Art extends AppModel {

    public $belongsTo = array(
        'Category' => array(
            'className' => 'Category',
            'dependent' => true,
            'foreignKey' => 'category_id'
        ),
        'Color' => array(
            'className' => 'Color',
            'dependent' => true,
            'foreignKey' => 'color_id'
        ),
        'Style' => array(
            'className' => 'Style',
            'dependent' => true,
            'foreignKey' => 'style_id'
        ),
        'User' => array(
            'className' => 'User',
            'dependent' => true,
            'foreignKey' => 'author'
        )
    );

    public $giftCategoryId = 11;

    public $giftColorId = 12;

    public $giftStyleId = 11;
					
    public $validate = array(
        'title' => array(
            'rule' => 'notEmpty',
            'message' => 'Title cannot be left blank.'
            ),
        'description'	=> array(
            'rule' => 'notEmpty',
            'message' => 'Description cannot be left blank.'
            ),
        'price' => array(
            'rule' => 'notEmpty',
            'message' => 'Price cannot be left blank.'
            ),
        'category_id' => array(
            'rule' => 'notEmpty',
            'message' => 'Category cannot be left blank.'
            ),
        'style_id' => array(
            'rule' => 'notEmpty',
            'message' => 'Style cannot be left blank.'
            ),	
        'color_id' => array(
            'rule' => 'notEmpty',
            'message' => 'Color cannot be left blank.'
            )
        );

    function getArt() {
        return $this->find('all',
            array('conditions' => array('Art.category_id NOT' => $this->giftCategoryId,
                'Art.color_id NOT' => $this->giftColorId,
                'Art.style_id NOT' => $this->giftStyleId),
                'limit' => 8,
                'order' => array('Art.id DESC')));
    }
}