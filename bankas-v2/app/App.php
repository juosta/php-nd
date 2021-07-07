<?php
namespace Bank;

class App {

    public static function start()
    {
        ob_start();
        self::router();
        ob_end_flush();
    }

    public static function view($file, $data = [])
    {
        extract($data);
        require DIR.'views/'.$file.'.php';
    }

    public static function redirect($path = '') 
    {
        header('Location: '.URL.$path);
        die;
    }

    public static function getMessage()
    {
        if (!isset($_SESSION['message'])) {
            return false;
        }
        $msg = $_SESSION['message'];
        unset($_SESSION['message']);
        return $msg;
    }

    public static function setMessage(string $msg, string $type)
    {
        $_SESSION['message'] = "<div class=\"alert alert-$type\" role=\"alert\">$msg</div>";
    }

    private static function router()
    {
        // $uri = str_replace(INSTALL_DIR, '', $_SERVER['REQUEST_URI']);
        $uri = $_SERVER['REQUEST_URI'];

        $uri = explode('/', $uri);

        array_shift($uri);

        
//----------------------------------------------------------------------------------------------
        //LOGIN

        if ('login' == $uri[0]) {
            if ('GET' == $_SERVER['REQUEST_METHOD']) {
                return (new UserController)->index();
            }
            else {
                return (new UserController)->login();
            }
        }    
        if ('logoff' == $uri[0]) {
            if ('GET' == $_SERVER['REQUEST_METHOD']) {
                return (new UserController)->logoff();
            }
        }  
        if (!isset($_SESSION['logged'])) {
            return (new UserController)->index();
        }       
//----------------------------------------------------------------------------------------------

        if ('create-acc' == $uri[0]) {
            if ('GET' == $_SERVER['REQUEST_METHOD']) {
                return (new AccountController)->create();
            }
            else {
                return (new AccountController)->save();
            }
        }
        if ('addFunds' == $uri[0] && isset($uri[1])) {
            if ('GET' == $_SERVER['REQUEST_METHOD']) {
                return (new AccountController)->addFunds($uri[1]);
            }
            else {
                return (new AccountController)->doAddFunds($uri[1]);
            }
        }

        if ('withdraw' == $uri[0] && isset($uri[1])) {
            if ('GET' == $_SERVER['REQUEST_METHOD']) {
                return (new AccountController)->withdraw($uri[1]);
            }
            else {
                return (new AccountController)->doWithdraw($uri[1]);
            }
        }

        if ('delete' == $uri[0] && isset($uri[1]) && 'POST' == $_SERVER['REQUEST_METHOD']) {
            return (new AccountController)->delete($uri[1]);
        }

        if ($uri[0] === '' && count($uri) === 1) {
            return (new AccountController)->index();
        }
       
        self::view('404');
        http_response_code(404);
        
    }
}