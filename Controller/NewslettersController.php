<?php

class NewslettersController extends AppController {

    public $name = 'Newsletters';
    //public $scaffold = '';
    var $paginate = array('Newsletter' => array('limit' => 10));
    public $components = array(
        'Session',
       'Auth' => array(
            //'loginAction' => array('controller' => 'Users', 'action' => 'login'), 
            'loginRedirect' => array('controller' => 'Pages', 'action' => 'display'),
            'logoutRedirect' => array('controller' => 'Pages', 'action' => 'index'),
            'authError' => 'Did you really think you are allowed to see that?',
            'authorize' => array('Controller')
        )
    );

    public function beforeFilter() {
        parent::beforeFilter();
        $user = $this->Auth->user();
        $this->set('current_user', $user);
        $this->Auth->allow('add');
        $this->layout = "admin";
    }

    public function isAuthorized($user) {
        if ($user['role_id'] == 1) {
            return true;
        }
        return false;
    }

    public function add() {
        if (!$this->Session->check('news_letter_sign_up')){
            if ($this->request->is('post')) {
                if ($this->Newsletter->save($this->request->data)) {
                    echo 'success';
                    $this->Session->write('news_letter_sign_up', '1');
                } else {
                    echo 'failure';
                }
            }
            die;
        } else {
            echo 'failure';
        }
        die;
    }

}

?>
