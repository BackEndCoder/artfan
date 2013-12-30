<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SidebarController
 *
 * @author Wilson<mailwilson007@gmail.com>
 */
App::uses('CategoriesController', 'Controller');
App::uses('StylesController', 'Controller');
App::uses('ColorsController', 'Controller');
App::uses('TestimonialsController', 'Controller');
App::uses('PagesController', 'Controller');

class SidebarController extends AppController {

    public $name = 'Sidebar';
    public $uses = array();

    public function getCategories() {
        $cat = new CategoriesController();
        $cat->constructClasses();
        $categories = $cat->Category->find('list', array('fields' => array('Category.id', 'Category.catname')));
        return $categories;
    }

    public function getStyles() {
        $styleCtrl = new StylesController();
        $styleCtrl->constructClasses();
        $styles = $styleCtrl->Style->find('list', array('fields' => array('Style.id', 'Style.stylename')));
        return $styles;
    }

    public function getColors() {
        $colorCtrl = new ColorsController();
        $colorCtrl->constructClasses();
        $colors = $colorCtrl->Color->find('list', array('fields' => array('Color.id', 'Color.colorname')));
        return $colors;
    }

    public function getTestimonials() {
        $testimonialCtrl = new TestimonialsController();
        $testimonialCtrl->constructClasses();
        $testimonials = $testimonialCtrl->Testimonial->find('all');
        return $testimonials;
    }

    public function getPerfectGift() {
        $pageCtrl = new PagesController();
        $pageCtrl->constructClasses();
        $page = $pageCtrl->Page->find('first', array('conditions' => array('id' => 4)));
        return $page;
    }

}

?>
