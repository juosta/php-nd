<?php
$id = $_GET['id'] ?? 0;
$amount = $_POST['amount'];
if($amount < 0){
    $message = "Pridedama suma negali būti minusinė.";
    $_SESSION['message'] = "<script type='text/javascript'>alert('$message');</script>";
    header("Location: http://localhost/php-nd/bankas/?action=addFunds&id=" . $users[$id]['userId']);
    die;
} else {
    $users[$id]['balance'] += (int) $amount;
    file_put_contents(__DIR__.'/data.json', json_encode($users));
    redirect();
}
         