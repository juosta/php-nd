<?php
namespace Bank;

class UserController {
    public function index()
    {
        return App::view('login');
    }

    public function login(){
        $employees = json_decode( file_get_contents(DIR.'/employees.json'), 1);
        foreach ($employees as $user) {
            if ($user['id'] == $_POST['id']) {
                if ($user['pass'] == md5($_POST['pass'])) {
                    $_SESSION['logged'] = 1;
                    $_SESSION['name'] = $user['name'];
                    App::setMessage('Sveiki, '.$_SESSION['name'], "primary");
                    App::redirect();
                }
            }
        }
        App::setMessage('Neteisingi prisijungimo duomenys.', "danger");
        App::redirect('login');
    }

    public function logoff(){
            unset($_SESSION['logged'], $_SESSION['name']);
            App::setMessage('Iki pasimatymo!', "primary");
            App::redirect('login');
    }
}