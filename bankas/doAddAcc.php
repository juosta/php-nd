<?php
if(!isset($_POST['name']) || empty($_POST['name']) or 
    (!isset($_POST['surname']) || empty($_POST['surname'])) or 
    (!isset($_POST['accNo']) || empty($_POST['accNo'])) or 
    (!isset($_POST['personalNo']) || empty($_POST['personalNo']))
    ){
        $error = true;
    }

if(!isset($error)){    
$newUser = ['userId'=> rand(10,100),'name' => $_POST['name'],'surname'=> $_POST['surname'], 'accNo'=>$_POST['accNo'], 'personalNo' => $_POST['personalNo'], 'balance'=> 0];
$users[] = $newUser;
file_put_contents(__DIR__.'/data.json', json_encode($users));
redirect();
} else {
    require __DIR__. '/addAcc.php';
}



