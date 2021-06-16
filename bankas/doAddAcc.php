<?php
$personal = preg_replace('/[^0-9]/', '', $_POST['personalNo']);
if(!isset($_POST['name']) || empty($_POST['name']) or 
    (!isset($_POST['surname']) || empty($_POST['surname'])) or 
    (!isset($_POST['personalNo']) || empty($_POST['personalNo'])) or
    (isset($_POST['name']) && strlen($_POST['name']) <= 3) or
    (isset($_POST['surname']) && strlen($_POST['surname']) <= 3) or 
    (isset($_POST['personalNo']) && (strlen($_POST['personalNo'])) != 11 || strlen(($personal ?? "")) != 11)
    ){
        $error = true;
    }
foreach($users as $user){
    if($_POST['personalNo'] == $user['personalNo']){
        $error = true;
        $message = "Vartotojas su tokiu asmens kodu jau egzistuoja.";
        $_SESSION['message'] = "<script type='text/javascript'>alert('$message');</script>";
        break;
    }
}
if(!isset($error)){   
    $newUser = ['userId'=> rand(10,100),'name' => $_POST['name'],'surname'=> $_POST['surname'], 'accNo'=>$_POST['accNo'], 'personalNo' => $_POST['personalNo'], 'balance'=> 0];
    $users[] = $newUser;
    file_put_contents(__DIR__.'/data.json', json_encode($users));
    redirect();
} else {
    require __DIR__. '/addAcc.php';
    
}



