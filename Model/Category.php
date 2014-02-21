<?php
class Category extends AppModel {
    public function getCategories() {
        return $this->find('list', array('fields' => array('Category.id', 'Category.catname')));
    }
    public function getCategoryName($id) {
		return $this->find('first', array('conditions' => array('Category.id' => $id),
			'fields' => array('Category.catname')));
    }
}