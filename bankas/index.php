<?php
require __DIR__ . '/bootstrap.php';
if (!isset($_SESSION['logged'])) {
    header('Location: http://localhost/php-nd/bankas/login.php');
    die;
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
