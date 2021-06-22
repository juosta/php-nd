<?php
$id = $_GET['id'] ?? 0;
$amount = $_POST['amount'];
foreach($users as &$user){
    if($user['userId']==$id){
        if($amount < 0 || !is_numeric($amount)){
            setMessage("Suma turi būti teigiamas skaičius.", "danger");
            header("Location: http://localhost/php-nd/bankas/?action=addFunds&id=" . $id);
            die;
        } else {
            $user['balance'] += (int) $amount;
            file_put_contents(__DIR__.'/data.json', json_encode($users));
            setMessage("Suma sėkmingai pridėta.", "success");
            redirect();
        }
    }
}