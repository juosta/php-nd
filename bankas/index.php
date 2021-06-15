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

if(isset($_SESSION['message'])) {
    echo $_SESSION['message'];
    unset($_SESSION['message']);
}
// 1. Saskaitu saraso atvaizdavimas GET
if (!isset($_GET['action']) && $_SERVER['REQUEST_METHOD'] == 'GET') {
    require __DIR__. '/saskaitos.php';
}

// 2. Pridejimo atvaizdavimas GET
elseif ($_GET['action'] == 'addFunds' && $_SERVER['REQUEST_METHOD'] == 'GET') {
    require __DIR__. '/addFunds.php';
}

// 3. Pridejimo vykdymas POST
elseif ($_GET['action'] == 'addFunds' && $_SERVER['REQUEST_METHOD'] == 'POST') {
    require __DIR__. '/doAddFunds.php';
}

// 4. Isemimo atvaizdavimas GET
elseif ($_GET['action'] == 'withdraw' && $_SERVER['REQUEST_METHOD'] == 'GET') {
    require __DIR__. '/withdraw.php';
}

// 5. Isemimo vykdymas POST
elseif ($_GET['action'] == 'withdraw' && $_SERVER['REQUEST_METHOD'] == 'POST') {
    require __DIR__. '/doWithdraw.php';
}

// 6. Naujos dezes pridejimo atvaizdavimas GET
elseif ($_GET['action'] == 'addAcc' && $_SERVER['REQUEST_METHOD'] == 'GET') {
    require __DIR__. '/addAcc.php';
}

// 7. Naujos dezes pridejimo vykdymas POST
elseif ($_GET['action'] == 'addAcc' && $_SERVER['REQUEST_METHOD'] == 'POST') {
    require __DIR__. '/doAddAcc.php';
}

// 8. Dezes trynimo vykdymas POST
elseif ($_GET['action'] == 'delete' && $_SERVER['REQUEST_METHOD'] == 'POST') {
    require __DIR__. '/doDelete.php';
}
