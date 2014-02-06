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

class StylesController extends AppController {

    public $name = 'Styles';
    public $paginate = array('Style' => array('limit' => 10));

    public function getStyles() {
        return $this->Style->getStyles();
    }
}