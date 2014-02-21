<?php
class Style extends AppModel {
    public function getStyles() {
        return $this->find('list', array('fields' => array('Style.id', 'Style.stylename')));
    }

	public function getStyleName($id){
		return $this->find('first', array('conditions' => array('Style.id' => $id),
			'fields' => array('Style.stylename')));
	}
}