<?php

class Login extends Controller {

    function __construct() {
        parent::__construct();    
    }
    
    public function index() 
    {    
        $this->run();
    }
    
    public function run()
    {
        if (!empty($_POST['username']) && !empty($_POST['password'])) {
            // username is email
            $username = $_POST['username'];
            $password = $_POST['password'];

            $msg = array();

            $user = $this->model->get_user($username);
            $pass = $this->model->get_pass($password);
            $login = $this->model->get_login($username, $password);


            if (!empty($user) && empty($pass)) {

                $msg = array(
                    'type' => 'error',
                    'content' => 'Wrong password'
                    );
            }
            else if (!empty($pass) && empty($user)) {
                $msg = array(
                    'type' => 'error',
                    'content' => 'Wrong username'
                    );
            }
            else if (!empty($login)) {
                // $sha_password = sha1($password);
                    Session::init();
                    Session::set('role', $data['role']);
                    Session::set('loggedIn', true);
                    Session::set('userid', $data['userid']);
                    // Check if administrator
                    if(($login[0]['role']) != 'admin') {
                        header('location: ../profile');
                    }
                    header('location: ../dashboard');
            }
            else {
                $msg = array(
                'type' => 'error',
                'content' => 'Wrong username or password'
                );
            }
            
        }
        else {
            $msg = array(
                'type' => 'info',
                'content' => 'The username and password cannot be blank'
            );
        }
        $this->view->set_content('message', $msg);
        $this->view->title = 'Login';

        $this->view->render('header');
        $this->view->render('login/index');
        $this->view->render('footer');
    }

    public function signup()
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

            // validate password
            if (!empty($_POST['password']) && !empty($_POST['re-password'])) {
                if ($_POST['password'] != $_POST['re-password']) {
                    $validate = false;
                    $msg['content'][] = "The password and confirm password doesn't match";
                }
            }else{
                $validate = false;
                $msg['content'][] = 'The password and confirm password cannot be blank';
            }
            if ($validate) {
                // $name above

                $data = array();
                $data['username'] = $name;
                $data['password'] = $_POST['password'];
                $data['role'] = $_POST['role'];
                
                // @TODO: Do your error checking!
                
                $this->model->create($data);
                    $msg['type'] = 'info';
                    $msg['content'][] = 'Signup successful';
            }
            else {

                    $msg['content'][] = 'An error occurred';
            }
            $this->view->set_content('message', $msg);
        }
        $this->view->title = 'Signup';
        $this->view->render('header');
        $this->view->render('login/signup');
        $this->view->render('footer');
        
    }


    

}