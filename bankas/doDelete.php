<?php   
$id = $_GET['id'] ?? 0;
    foreach($users as $key => $user){
        if($user['userId'] == $id)
        {
            if($user['balance']==0){
            unset($users[$key]);
            file_put_contents(__DIR__.'/data.json', json_encode($users));
            redirect();
            } 
            else {
                $message = "Negalima ištrinti sąskaitos, kurioje yra pinigų.";
                $_SESSION['message'] = "<script type='text/javascript'>alert('$message');</script>";
                redirect();
            }
        }
    }