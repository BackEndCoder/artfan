<?php
class Slider extends AppModel {
    public function getSliders() {
    	return $this->find('all');
    }
}