<?php
namespace Bank;

class UserController {
    public function index()
    {
        return App::view('login');
    }

    public function login(){
        $code = $_POST['id'];
        $pass = md5($_POST['pass']);

        $user = Maria::getMaria()->getEmployee($code,$pass);

        if (empty($user)) {
            App::setMessage('Neteisingi prisijungimo duomenys.', "danger");
            App::redirect('login');
        }

        $_SESSION['logged'] = 1;
        $_SESSION['name'] = $user['name'];
        App::setMessage('Sveiki, '.$_SESSION['name'], "primary");
        App::redirect();
        
    }

    public function logoff(){
            unset($_SESSION['logged'], $_SESSION['name']);
            App::setMessage('Iki pasimatymo!', "primary");
            App::redirect('login');
    }
}