<?php
class SlidersController extends AppController {

    public $name = 'Sliders';
    public $paginate = array('Slider' => array('limit' => 10));

    public function add() {
        if ($this->request->is('post')) {
            if ($this->Slider->save($this->data)) {

                $insert_id = $this->Slider->id;
                $folder_url = WWW_ROOT . "files/SliderImages/" . $insert_id . "/";

                $image = $this->data['Slider']['myimage'];
                if ($image['size'] > 0) {
                    if (is_dir($folder_url) != 1) {
                        mkdir($folder_url);
                    }
                    move_uploaded_file($image['tmp_name'], $folder_url . $image['name']);
                }
                $this->redirect(array('action' => 'index'));
                $this->Session->setFlash("The slider has been saved");
            } else {
                $this->Session->setFlash('The slider could not be saved. Please, try again.');
            }
        }
    }

    public function edit($id = '') {
        $this->Slider->id = $id;

        if (!$this->Slider->exists()) {
            throw new NotFoundException('Invalid Slider');
        }

        $folder_url = WWW_ROOT . "files/SliderImages/" . $id . "/";

        if ($this->request->is('post') || $this->request->is('put')) {
            $image = $this->data['Slider']['myimage'];
            if ($image['size'] > 0) {
                $this->deleteDir($folder_url);
                if (is_dir($folder_url) != 1) {
                    mkdir($folder_url);
                }
                move_uploaded_file($image['tmp_name'], $folder_url . $image['name']);
            }
            if ($this->Slider->save($this->request->data)) {
                $this->Session->setFlash('The slider has been saved');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('The slider could not be saved. Please, try again.');
            }
        } else {
            $this->request->data = $this->Slider->read();
            $http_url = $this->base . "/files/SliderImages/" . $id . "/";
            $images = array();
            $featuredImage = '';
            foreach (new DirectoryIterator($folder_url) as $fn) {
                if ($fn->getFilename() != "." && $fn->getFilename() != "..") {
                    if (is_dir($folder_url . $fn->getFilename())) {
                        foreach (new DirectoryIterator($folder_url . $fn->getFilename()) as $ffn) {
                            $featuredImage = $http_url . 'featured/' . $ffn->getFilename();
                        }
                    } else {
                        $images[] = $http_url . $fn->getFilename();
                    }
                }
            }
            $this->set('imagesList', $images);
        }
    }

    public function view($id = '') {
        $this->Slider->id = $id;

        if (!$this->Slider->exists()) {
            throw new NotFoundException('Invalid slider');
        }

        if (!$id) {
            $this->Session->setFlash('Invalid slider');
            $this->redirect(array('action' => 'index'));
        }
        $this->set('slider', $this->Slider->read());
        $folder_url = WWW_ROOT . "files/SliderImages/" . $id . "/";
        $http_url = $this->base . "/files/SliderImages/" . $id . "/";
        $images = array();
        $featuredImage = '';
        foreach (new DirectoryIterator($folder_url) as $fn) {
            if ($fn->getFilename() != "." && $fn->getFilename() != "..") {
                if (is_dir($folder_url . $fn->getFilename())) {
                    foreach (new DirectoryIterator($folder_url . $fn->getFilename()) as $ffn) {
                        $featuredImage = $http_url . 'featured/' . $ffn->getFilename();
                    }
                } else {
                    $images[] = $http_url . $fn->getFilename();
                }
            }
        }
        $this->set('imagesList', $images);
    }

    public function delete($id = null) {
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }

        if (!$id) {
            $this->Session->setFlash('Invalid id for the slider');
            $this->redirect(array('action' => 'index'));
        }

        if ($this->Slider->delete($id)) {
            $folder_url = WWW_ROOT . "files/SliderImages/" . $id . "/";
            $this->deleteDir($folder_url);
            $this->Session->setFlash('Slider deleted');
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash('Slider was not deleted');
        $this->redirect(array('action' => 'index'));
    }

    function deleteDir($path) {
        $class_func = array(__CLASS__, __FUNCTION__);
        return is_file($path) ?
                @unlink($path) :
                array_map($class_func, glob($path . '/*')) == @rmdir($path);
    }

    public function getSliders() {
        return $this->Slider->getSliders();
    }
}