<?php
class Color extends AppModel {
    public function getColors() {
        return $this->find('list', array('fields' => array('Color.id', 'Color.colorname')));
    }
}