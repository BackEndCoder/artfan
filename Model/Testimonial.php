<?php
class Testimonial extends AppModel {
    public function getTestimonials() {
        return $this->find('all');
    }
}