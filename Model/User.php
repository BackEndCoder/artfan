<?php
class User extends AppModel {

    public $belongsTo = array(
        'Role' => array(
            'className' => 'Role',
            'dependent' => true,
            'foreignKey' => 'role_id'
        )        
    );

	public function getArtists() {
        return $this->find('all', array('conditions' => array('User.role_id' => 2)));
    }

    public function getNewArtists() {
    	return $this->find('all', array('conditions' => array('User.role_id' => 2), 'order' => array('User.id DESC')));
    }
}