<?php
class Content extends AppModel {
	public $useTable = 'pages';
    public function getContent($id) {
        return $this->find('first', array('conditions' => array('id' => $id)));
    }
}