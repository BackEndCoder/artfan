<?php
/**
 * Created by PhpStorm.
 * User: Luke
 * Date: 01/11/13
 * Time: 12:47
 */

class InspiredController extends AppController {
    public $helpers = array('Html', 'Form', 'Session');
    public $components = array(
        'Session', 'Auth'
    );


    public function beforeFilter() {
        //parent::beforeFilter();
        $user = $this->Auth->user();
        $this->set('current_user', $user);
        $this->Auth->allow('index');
        $this->layout = "admin";
    }

    public function index() {
        $this->layout = 'default';
        $this->set('inspired', $this->Inspired->find('all'));
    }

    public function add(){
        if ($this->Session->read('level')== 1){
            $this->layout = 'admin';
            if ($this->request->is('post')) {
                $this->Inspired->create();
                if ($this->Inspired->save($this->request->data)) {
                    $this->Session->setFlash(__('Inspired artwork has been saved.'));
                    return $this->redirect(array('action' => 'index'));
                }
                $this->Session->setFlash(__('Unable to add inspired artwork.'));
            }
        } else {
            //return $this->redirect(array('Controller' => 'Inspired', 'action' => 'index'));
            return $this->redirect(array('action' => 'index'));
        }
    }

    public function edit($id = null) {
        if ($this->Session->read('level')== 1){
            $this->layout = 'admin';
            if (!$id) {
                throw new NotFoundException(__('Invalid inspired artwork'));
            }

            $inspired = $this->Inspired->findById($id);
            if (!$inspired) {
                throw new NotFoundException(__('Invalid inspired artwork'));
            }

            if ($this->request->is(array('post', 'put'))) {
                $this->Inspired->id = $id;
                if ($this->Inspired->save($this->request->data)) {
                    $this->Session->setFlash(__('Inspired artwork has been updated.'));
                    return $this->redirect(array('action' => 'index'));
                }
                $this->Session->setFlash(__('Unable to update inspired artwork.'));
            }

            if (!$this->request->data) {
                $this->request->data = $inspired;
            }
        } else {
            return $this->redirect(array('action' => 'index'));
        }
    }

    public function remove($id = null){
        echo 'lol';
    }
}