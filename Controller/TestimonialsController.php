<?php
class TestimonialsController extends AppController {

    public $name = 'Testimonials';
    public $paginate = array('Testimonial' => array('limit' => 10));

    public function getTestimonials() {
        return $this->Testimonial->getTestimonials();
    }
}