<?php
App::uses('AppController', 'Controller');
class CategoriesController extends AppController {

	public $name = 'Categories';

	public $paginate = array('Category' => array('limit' => 10));

	public function getCategories() {
		return $this->Category->getCategories();
	}
}