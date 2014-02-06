<?php
class Style extends AppModel {
    public function getStyles() {
        return $this->find('list', array('fields' => array('Style.id', 'Style.stylename')));
    }
}