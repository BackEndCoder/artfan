<?php
class Category extends AppModel {
    public function getCategories() {
        return $categories = $this->find('list', array('fields' => array('Category.id', 'Category.catname')));
    }
}