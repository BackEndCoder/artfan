<?php
class Page extends AppModel {
    public function getPerfectGift() {
        return $this->find('first', array('conditions' => array('id' => 4)));
    }
}