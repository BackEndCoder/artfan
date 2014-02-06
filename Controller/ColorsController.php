<?php
App::uses('AppController', 'Controller');
class ColorsController extends AppController {

    public $name = 'Colors';
    public $scaffold = '';
    public $paginate = array('Color' => array('limit' => 10));

    public function getColors() {
        return $this->Color->getColors();
    }
}