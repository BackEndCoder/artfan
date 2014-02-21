<?php
class Color extends AppModel {
    public function getColors() {
        return $this->find('list', array('fields' => array('Color.id', 'Color.colorname')));
    }

	public function getColorName($id) {
		return $this->find('first', array('conditions' => array('Color.id' => $id),
			'fields' => array('Color.colorname')));
	}
}