<?php

/**
 * Description of UsersController
 *
 * @author Wilson<mailwilson007@gmail.com>
 */
class UsersController extends AppController {

    public $name = 'Users';
    var $paginate = array(
        'limit' => 10,
        'order' => array('User.id' => 'asc'));
    public $components = array(
        'Session',
        'Auth' => array(
            'loginRedirect' => array('controller' => 'Pages', 'action' => 'display'),
            'logoutRedirect' => array('controller' => 'Pages', 'action' => 'display'),
            'authError' => 'Did you really think you are allowed to see that?',
            'authorize' => array('Controller')
        )
    );

    public function getCurrentUserName () {
        //return $this->Auth->user('username');
        return "test";
    }


    public function beforeFilter() {
        parent::beforeFilter();
        $user = $this->Auth->user();
        $this->set('current_user', $user);
        $this->Auth->allow('register');
        $this->Auth->allow('login');
        $this->Auth->allow('logout');
        $this->Auth->allow('profile');
        $this->Auth->allow('completeregistration');
        $this->Auth->allow('forgotpassword');
    }

    public function isAuthorized($user) {
        if ($user['role_id'] == '1') {
            return true;
        }
        return false;
        /*
          if (in_array($this->action, array('edit', 'delete'))) {
          if ($user['id'] != $this->request->params['pass'][0]) {
          return false;
          }
          } */
    }

    public function login() {
        if (isset($user['role_id'])){
            $this->redirect("/");
        } else{
            if ($this->request->is('post')) {
                $username = $this->request->data['User']['username'];

                $user_exists = $this->User->find('first', array('conditions' =>
                    array('username' => $username, 'is_active' => 1
                )));
                if (count($user_exists) > 0) {
                    if ($this->Auth->login()) {
                        $usr = $this->Auth->user();
                        if ($usr['role_id'] == 1) {
                            $this->Session->write('username', $username);
                            $this->Session->write('level', '1');
                            $this->redirect($this->referer());
                        } else if ($usr['role_id'] == 2) {
                            $this->Session->write('username', $username);
                            $this->Session->write('level', '2');
                            $this->redirect($this->referer());
                        } else if ($usr['role_id'] == 3) {
                            $this->Session->write('username', $username);
                            $this->Session->write('level', '3');
                            $this->redirect($this->referer());
                        } else {
                            $this->redirect($this->Auth->redirect());
                        }
                    } else {
                        $this->Session->setFlash('Your username/password combination was incorrect');
                    }
                }
            } else {
                if ($this->Auth->user()) {
                    $this->redirect(array('controller' => 'Pages', 'action' => 'display'));
                }
            }
        }
    }

    public function logout() {
        $this->Session->destroy();
        $this->redirect($this->Auth->logout());
    }

    public function index() {
        $this->layout = 'admin';

        $data = $this->paginate('User');
        $this->set('users', $data);
//$this->User->recursive = 0;
//$this->set('users', $this->User->find('all'));
    }

    public function view($id = null) {
        $this->layout = 'admin';

        $this->User->id = $id;

        if (!$this->User->exists()) {
            throw new NotFoundException('Invalid user');
        }

        if (!$id) {
            $this->Session->setFlash('Invalid user');
            $this->redirect(array('action' => 'index'));
        }
        $this->set('user', $this->User->read());
    }

    public function register() {
        if (isset($user['role_id'])){
            $this->redirect("/");
        } else{
            if ($this->request->is('post')) {
                $user_exists = $this->User->find('first', array('conditions' =>
                    array(
                        'OR' => array(
                            'username' => $this->request->data['User']['username'],
                            'email' => $this->request->data['User']['email']
                        )
                )));

                if (!empty($user_exists)) {
                    $this->Session->setFlash('Username/Email Already Exists');
                } else {
                    $this->request->data['User']['password'] = AuthComponent::password($this->request->data['User']['password']);

                    $rand = $this->generateRandomString(40);
                    $this->request->data['User']['rand_str'] = $rand;
                    if ($this->User->save($this->request->data)) {
                        $to = $this->request->data['User']['email'];
                        //$from = "pgmr.anil@gmail.com";
                        $from = "admin@artfan.com";
                        $subject = "Complete Registration";
                        $message = "User registered.<br/>";
                        $message .= '<a href="http://www.artfan.co.uk/Users/completeregistration/' . $rand . '">http://www.artfan.co.uk/Users/CompleteRegistration/' . $rand . '</a>';
                        $headers = 'MIME-Version: 1.0' . "\r\n";
                        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                        $headers .= 'To: ' . $to . "\r\n";
                        $headers .= "From:" . $from;

                        $user_role_id = $this->request->data['User']['role_id'];
                        if($user_role_id == 3) {
                            $user_role_label = 'Buyer';
                            $message = '

    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="font-family: arial; font-size:12px;">
            <tr>
                <td style="padding: 10px 0 30px 0;">
                    <table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="border: 1px solid #cccccc; border-collapse: collapse;  font-size:12px;">
                        <tr>
                            <td align="center" bgcolor="#a3a289" style="color: #153643; font-size: 28px; font-weight: bold; font-family: Arial, sans-serif;  font-size:12px;">
                                <img src="'.Router::url('/', true).'app/webroot/files/email_img/h1.gif" alt="Creating Email Magic" width="600" height="92" style="display: block;" />
                            </td>
                        </tr>
                        <tr>
                            <td bgcolor="#ffffff" style="padding: 40px 30px 40px 30px;">
                                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                    <tr>
                                        <td style="color: #153643; font-family: Arial, sans-serif; font-size: 24px;">
                                            Thank you for Registering with us.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table style="font-size: 12px;">
                                            <tr>
                                                <td>Welcome To Artfan Community. It\'s great to have you join us</td>
                                            </tr>
                                            <tr>
                                                <td>Please Confirm Your Email address by clicking the link below</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div style="margin: 10px;">

                                                    <a href="http://idreamsuk.com/artfan/Users/completeregistration/' . $rand . '" style="padding:5px; background-color: #a3a289; text-decoration: none; color: #FFF; ">Confirm Email Address</a>

                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <table style="font-size: 12px;">
                                                        <tr>
                                                            <td>Username</td>
                                                            <td>'.$this->request->data['User']['username'].'</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Email</td>
                                                            <td>'.$this->request->data['User']['email'].'</td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                            </table>
                                            <br/>


                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td bgcolor="#a3a289" style="padding: 30px 30px 30px 30px;">
                                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                    <tr>
                                        <td style="color: #ffffff; font-family: Arial, sans-serif; font-size: 14px;" width="75%">
                                            &reg; Artfan 2013<br/>
                                            t: 01234 567891
                                        </td>
                                        <td align="right" width="25%">
                                            <table border="0" cellpadding="0" cellspacing="0">
                                                <tr>
                                                    <td style="font-family: Arial, sans-serif; font-size: 12px; font-weight: bold;">
                                                        <a href="http://www.twitter.com/" style="color: #ffffff;">
                                                            <img src="'.Router::url('/', true).'app/webroot/files/email_img/tw.gif" alt="Twitter" width="38" height="38" style="display: block;" border="0" />
                                                        </a>
                                                    </td>
                                                    <td style="font-size: 0; line-height: 0;" width="20">&nbsp;</td>
                                                    <td style="font-family: Arial, sans-serif; font-size: 12px; font-weight: bold;">
                                                        <a href="http://www.twitter.com/" style="color: #ffffff;">
                                                            <img src="'.Router::url('/', true).'app/webroot/files/email_img/fb.gif" alt="Facebook" width="38" height="38" style="display: block;" border="0" />
                                                        </a>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
                        ';
                        }
                        else if($user_role_id == 2) {
                            $user_role_label = 'Seller';
                            $message = '

    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="font-family: arial; font-size:12px;">
            <tr>
                <td style="padding: 10px 0 30px 0;">
                    <table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="border: 1px solid #cccccc; border-collapse: collapse;  font-size:12px;">
                        <tr>
                            <td align="center" bgcolor="#a3a289" style="color: #153643; font-size: 28px; font-weight: bold; font-family: Arial, sans-serif;  font-size:12px;">
                                <img src="'.Router::url('/', true).'app/webroot/files/email_img/h1.gif" alt="Creating Email Magic" width="600" height="92" style="display: block;" />
                            </td>
                        </tr>
                        <tr>
                            <td bgcolor="#ffffff" style="padding: 40px 30px 40px 30px;">
                                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                    <tr>
                                        <td style="color: #153643; font-family: Arial, sans-serif; font-size: 24px;">
                                            Thank you for Registering with us.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table style="font-size: 12px;">
                                            <tr>
                                                <td>Welcome To Artfan Community. It\'s great to have you join us</td>
                                            </tr>
                                            <tr>
                                                <td>Please Confirm Your Email address by clicking the link below, We will then review your art
												And set your account to live within 24 hours
												</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div style="margin: 10px;">

                                                    <a href="http://idreamsuk.com/artfan/Users/completeregistration/' . $rand . '" style="padding:5px; background-color: #a3a289; text-decoration: none; color: #FFF; ">Confirm Email Address</a>

                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <table style="font-size: 12px;">
                                                        <tr>
                                                            <td>Username</td>
                                                            <td>'.$this->request->data['User']['username'].'</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Email</td>
                                                            <td>'.$this->request->data['User']['email'].'</td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                            </table>
                                            <br/>


                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td bgcolor="#a3a289" style="padding: 30px 30px 30px 30px;">
                                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                    <tr>
                                        <td style="color: #ffffff; font-family: Arial, sans-serif; font-size: 14px;" width="75%">
                                            &reg; Artfan 2013<br/>
                                            t: 01234 567891
                                        </td>
                                        <td align="right" width="25%">
                                            <table border="0" cellpadding="0" cellspacing="0">
                                                <tr>
                                                    <td style="font-family: Arial, sans-serif; font-size: 12px; font-weight: bold;">
                                                        <a href="http://www.twitter.com/" style="color: #ffffff;">
                                                            <img src="'.Router::url('/', true).'app/webroot/files/email_img/tw.gif" alt="Twitter" width="38" height="38" style="display: block;" border="0" />
                                                        </a>
                                                    </td>
                                                    <td style="font-size: 0; line-height: 0;" width="20">&nbsp;</td>
                                                    <td style="font-family: Arial, sans-serif; font-size: 12px; font-weight: bold;">
                                                        <a href="http://www.twitter.com/" style="color: #ffffff;">
                                                            <img src="'.Router::url('/', true).'app/webroot/files/email_img/fb.gif" alt="Facebook" width="38" height="38" style="display: block;" border="0" />
                                                        </a>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
                        ';
                        }




                        mail($to, $subject, $message, $headers);

                        //$this->Session->setFlash('The user has been saved');

                        $this->Session->setFlash('<span class="thank">Thank you... </span><br/> <span class="email_received">You will receive an email shortly.</span>');

                        $this->redirect(array('action' => 'index', 'controller' => 'Registerok'));

                    } else {
                        $this->Session->setFlash('The user could not be saved. Please, try again.');
                    }
                }
            }
        }
    }

    public function edit($id = null) {
        $this->layout = 'admin';

        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException('Invalid user');
        }

        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash('The user has been saved');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('The user could not be saved. Please, try again.');
            }
        } else {
            $this->request->data = $this->User->read();
        }
    }

    public function delete($id = null) {
        $this->layout = 'admin';

        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }

        if (!$id) {
            $this->Session->setFlash('Invalid id for user');
            $this->redirect(array('action' => 'index'));
        }
        if ($this->User->delete($id)) {
            $this->Session->setFlash('User deleted');
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash('User was not deleted');
        $this->redirect(array('action' => 'index'));
    }

    public function profile() {
        $usr = $this->Auth->user();
        $db_user = $this->User->find('first', array(
            'conditions' => array(
                'User.id' => $this->Auth->user('id'))
        ));
        $folder_url = WWW_ROOT . "files/ProfileImages/" . $this->Auth->user('id') . "/";
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->User->save($this->request->data)) {

                $image = $this->data['User']['myimage'];

                if ($image['size'] > 0) {
                    $this->deleteDir($folder_url);
                    if (is_dir($folder_url) != 1) {
                        mkdir($folder_url);
                    }
                    move_uploaded_file($image['tmp_name'], $folder_url . $image['name']);
                }
                $this->Session->setFlash('User Profile Updated');
                $this->redirect(array('action' => 'profile'));
            } else {
                $this->Session->setFlash('Your profile could not be saved. Please, try again.');
            }
        } else {
            $this->request->data = $db_user;
            $http_url = $this->base . "/files/ProfileImages/" . $this->Auth->user('id') . "/";
            $images = '';
            if (file_exists($folder_url)) {
                foreach (new DirectoryIterator($folder_url) as $fn) {
                    $images = $http_url . $fn->getFilename();
                }
            }
            $this->set('profileimage', $images);
        }
    }

    public function changepassword() {
        $usr = $this->Auth->user();
        if ($usr == '') {
            $this->redirect(array('action' => 'login'));
        }
        if ($this->request->is('post')) {
            $current_password = $this->request->data["currentPassword"];
            $new_password = $this->request->data["newPassword"];
            $confirm_password = $this->request->data["confirmPassword"];

            $db_user = $this->User->find('first', array(
                'conditions' => array(
                    'User.id' => $this->Auth->user('id'))
            ));
            $db_password = $db_user['User']['password'];

            if (AuthComponent::password($current_password) != $db_password) {
                $this->set('status', 'Password Mismatch');
            } else {
                $this->User->query("UPDATE users SET password='" . AuthComponent::password($new_password) . "'
                                  WHERE id=" . $this->Auth->user('id'));
                $this->set('status', 'Password Changed Successfully');
            }
        } else {
            $this->set('status', '');
        }
    }

    public function completeregistration($rand_str) {
        $this->User->query("UPDATE users SET is_active=1 
                            WHERE rand_str='" . $rand_str . "'");
    }

    public function forgotpassword() {
        if ($this->request->is('post')) {
            $user_exists = $this->User->find('first', array('conditions' =>
                array('email' => $this->request->data['User']['email'])));
            if (count($user_exists) > 0) {
                $newpassword = $this->generateRandomString(8);
                $this->User->query("UPDATE users SET password='" . AuthComponent::password($newpassword) . "'
                                  WHERE email='" . $this->request->data['User']['email'] . "'");
                $to = $this->request->data['User']['email'];
                $from = "pgmr.anil@gmail.com";
                $subject = "Password Changed";
                $message = "Password Change Successful<br/>";
                $message .= 'New Password: ' . $newpassword;

                $headers = 'MIME-Version: 1.0' . "\r\n";
                $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
//$headers .= 'To: ' . $to . "\r\n";
                $headers .= "From:" . $from;
                if (mail($to, $subject, $message, $headers)) {
                    $this->Session->setFlash('New password has been sent to your email');
                } else {
                    $this->Session->setFlash('Something went wrong. Please Try Again Later');
                }
            } else {
                $this->Session->setFlash('Email not found');
            }
        }
    }

    public function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $randomString;
    }

    function deleteDir($path) {
        $class_func = array(__CLASS__, __FUNCTION__);
        return is_file($path) ?
                @unlink($path) :
                array_map($class_func, glob($path . '/*')) == @rmdir($path);
    }

}
?>
