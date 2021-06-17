<?php
$personal = preg_replace('/[^0-9]/', '', $_POST['personalNo']);

 if(($_SERVER['REQUEST_METHOD'] == 'POST') && (!isset($_POST['name']) || empty($_POST['name']))){
    setMessage("Laukas privalomas","danger");
    $error = true;
 }
 if(isset($_POST['name']) && strlen($_POST['name']) <= 3){
    setMessage("Vardas turi būti ilgesnis nei 3 simboliai","danger");
    $error = true;
 }

if(($_SERVER['REQUEST_METHOD'] == 'POST') && (!isset($_POST['surname']) || empty($_POST['surname']))){
    setMessage("Laukas privalomas","danger");
    $error = true;
}

if(isset($_POST['surname']) && strlen($_POST['surname']) <= 3) {
    setMessage("Pavardė turi būti ilgesnė nei 3 simboliai","danger");
    $error = true;
}
if(($_SERVER['REQUEST_METHOD'] == 'POST') && (!isset($_POST['personalNo']) || empty($_POST['personalNo']))){
    setMessage("Laukas privalomas","danger");
    $error = true;
}
require  __DIR__.'./personalNoValidation.php';

if(!isset($error)){   
    function setUserId(){
        $id = rand(1000,10000);
        foreach($users as $user){
            if($id == $user['userId']){
                setUserId();
            }
        }
        return $id;
    }
    $newUser = ['userId'=> setUserId(),'name' => $_POST['name'],'surname'=> $_POST['surname'], 'accNo'=>$_POST['accNo'], 'personalNo' => $_POST['personalNo'], 'balance'=> 0];
    $users[] = $newUser;
    file_put_contents(__DIR__.'/data.json', json_encode($users));
    setMessage("Sąskaita sėkmingai sukurta.","success");
    redirect();
} else {
    header("Location: http://localhost/php-nd/bankas/?action=addAcc");
    die;
}



