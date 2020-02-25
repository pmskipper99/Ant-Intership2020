<?php

class UsersController extends AppController
{
    var $uses = array('User');
    var $layout = "admin"; //khai báo lại layout khi chay vào controller users
    public function beforeFilter(){
        parent::beforeFilter();
        // Allow users to register and logout.
        //$this->Auth->allow('add', 'logout');
    }

    //action admin_login() nó sẽ tự động gọi file /app/View/Users/admin_login.ctp
    public function admin_login(){ 
        //Kiêm tra user có quyền đăng nhập ko
        if($this->request->is('post')){
            if($this->Auth->login()){
                //return $this->redirect($this->Auth->redirectUrl());
            }else{
                //$this->Flash->error(__('Invalid username or password, try again'));
                //$this->Session->setFlash('Username hoặc pass sai');
            }
        }
    }
}