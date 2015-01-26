<?php
App::uses('Security', 'Utility'); 
class UsersController extends AppController {
    
    public function login()
    {
        $this->layout = 'login';
        if ($this->request->is('post'))
        {
            if (($this->request->data['login'] != '') && ($this->request->data['password'] != ''))
            {
                $login = $this->request->data['login'];
                $password = $this->request->data['password'];
                
                $password_enc = Security::hash($password, 'sha1', true);
                $search = $this->User->find('first',array('conditions' => array('AND' => array('login' => $login, 'password' => $password_enc))));
               
                if ($search)
                {
                    $this->Session->write('Auth.User.id',$search['User']['id']);
                    $this->Session->write('Auth.User.login',$search['User']['login']);
                    $this->redirect(array('controller' => 'proxies','action' => 'dashboard'));
                } else {
                    $this->Session->setFlash('Please indicate a valid login and password.','flash_error',array(),'user');
                }
            } else {
                $this->Session->setFlash('Please indicate a login and a password.','flash_error',array(),'user');
            }
        }
    }
    
    public function logout()
    {
        $this->Session->delete('Auth');
        $this->Session->setFlash('You have been disconnected successfully.','flash_success',array(),'user');
        $this->redirect(array('controller' => 'users','action' => 'login'));
        
    }
}
?>