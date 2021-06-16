<?php 
session_start();
function redirect() {
    header('Location: http://localhost/php-nd/bankas/');
    die;
}

if (!file_exists(__DIR__.'/data.json')) {
    file_put_contents(__DIR__.'/data.json', json_encode([]));
}
$users = json_decode( file_get_contents(__DIR__.'/data.json'), 1);

function getMessage()
{
    if (!isset($_SESSION['message'])) {
        return false;
    }
    $msg = $_SESSION['message'];
    unset($_SESSION['message']);
    return $msg;
}

function setMessage(string $msg, string $type)
{
    $_SESSION['message'] = "<div class=\"alert alert-$type\" role=\"alert\">$msg</div>";
}
