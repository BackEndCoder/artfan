<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProductsController
 *
 * @author Wilson<mailwilson007@gmail.com>
 */
App::uses('AppController', 'Controller');

class CategoriesController extends AppController {

    public $name = 'Categories';
    public $scaffold = '';
    public $paginate = array('Category' => array('limit' => 10));

    public function getCategories() {
        return $this->Category->getCategories();
    }
}