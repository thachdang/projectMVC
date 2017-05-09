<?php

class User extends Controller {

    public function __construct() {
        parent::__construct();
        Auth::handleLogin();
    }
    
    public function index() 
    {    
        $this->view->title = 'Users';
        $this->view->userList = $this->model->userList();
        
        $this->view->render('header');
        $this->view->render('user/index');
        $this->view->render('footer');
    }

    public function add() 
    {    
        $this->view->title = 'Users';
        
        $this->view->render('header');
        $this->view->render('user/add');
        $this->view->render('footer');
    }
    
    public function create() 
    {
        $data = array();
        $data['login'] = $_POST['login'];
        $data['password'] = $_POST['password'];
        $data['role'] = $_POST['role'];
        
        // @TODO: Do your error checking!
        
        $this->model->create($data);
        header('location: ' . URL . 'user');
    }
    
    public function edit($id) 
    {
        $this->view->title = 'Edit User';
        $this->view->user = $this->model->userSingleList($id);
        
        $this->view->render('header');
        $this->view->render('user/edit');
        $this->view->render('footer');
    }
    
    public function editSave($id)
    {
        if (!empty($_POST)) {
            $validate = true;
            $msg = array(
                'type' => 'error',
                'content' => '',
                );
            // validate name
            if (!empty($_POST['username'])) {
                $name = trim($_POST['username']);
                $name = preg_replace('/\s+/', ' ', $name);
                $name = filter_var($name, FILTER_SANITIZE_STRING);
                if (preg_match('/^(\w+\s?)+$/', $name) === 1) {
                    if (strlen($name) > 150) {
                        $validate = false;
                        $msg['content'][] = 'The name must less than 150 characters';
                    }
                }else{
                    $validate = false;
                    $msg['content'][] = 'Name invalid';
                }
            }else{
                $validate = false;
                $msg['content'][] = 'Name cannot be blank';
            }
            // validate role
            if (empty($_POST['role'])) {
                $validate = false;
                $msg['content'][] = 'The role cannot be blank';
            }

            if ($validate) {
                // $name above

                $data = array();
                $data['userid'] = $id;
                $data['username'] = $name;
                $data['password'] = $_POST['password'];
                $data['role'] = $_POST['role'];
                
                // @TODO: Do your error checking!
                
                $this->model->editSave($data);
                    header('location: ../index');
                    $msg['type'] = 'info';
                    $msg['content'] = 'Edit Member Successful';
            }
            else {

                    $msg['content'][] = 'An error occurred';
            }
            $this->view->set_content('message', $msg);
        }
        $this->view->title = 'Edit Member';
        $this->view->render('header');
        $this->view->render('user/edit');
        $this->view->render('footer');
    }
    
    public function delete($id)
    {
        $this->model->delete($id);
        $msg['type'] = 'info';
        $msg['content'] = 'Edit Member Successful';
        $this->view->set_content('message', $msg);
        header('location: ../index');

    }
}