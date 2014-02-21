<?php
App::uses('AppController', 'Controller');
class ContentsController extends AppController {
    public $name = 'Contents';
    public $helpers = array('Html');

    public function beforeFilter() {
        parent::beforeFilter();
        $user = $this->Auth->user();
        $this->set('current_user', $user);
        $this->Auth->allow('display');
        $this->Auth->allow('show');
        $this->layout = "admin";
    }

    public function add() {
        if ($this->request->is('post')) {
            if ($this->Page->save($this->data)) {
                $this->redirect(array('action' => 'index'));
                $this->Session->setFlash("The page has been saved");
            } else {
                $this->Session->setFlash('The page could not be saved. Please, try again.');
            }
        }
    }

    public function edit($id = null) {
        $this->Page->id = $id;
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Page->save($this->request->data)) {
                $this->Session->setFlash('The product has been saved');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('The product could not be saved. Please, try again.');
            }
        } else {
            $this->request->data = $this->Page->read();
        }
    }

    public function view($id = null) {
        $this->Page->id = $id;

        if (!$this->Page->exists()) {
            throw new NotFoundException('Invalid Page');
        }

        if (!$id) {
            $this->Session->setFlash('Invalid Page');
            $this->redirect(array('action' => 'index'));
        }
        $this->set('page', $this->Page->read());
    }

    public function show($id = null) {
        $this->Page->id = $id;

        if (!$this->Page->exists()) {
            throw new NotFoundException('Invalid Page');
        }

        if (!$id) {
            $this->Session->setFlash('Invalid Page');
            $this->redirect(array('action' => 'index'));
        }
        $this->set('page', $this->Page->read());
        $this->layout = "default";
    }
	
    public function getContent($id) {
        return $this->Content->getContent($id);
    }
}