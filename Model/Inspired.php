<?php


   class Inspired extends AppModel {

       public $validate = array (
           'title'=> array ('rule' => 'notEmpty'),
           'body' => array('rule' => 'notEmpty'),
           'image' => array('rule' => 'notEmpty')
       );


       public function index(){

       }
   }

?>