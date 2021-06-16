<?php   
$id = $_GET['id'] ?? 0;
    foreach($users as $key => $user){
        if($user['userId'] == $id)
        {
            if($user['balance']==0){
            unset($users[$key]);
            file_put_contents(__DIR__.'/data.json', json_encode($users));
            setMessage("Sąskaita sėkmingai ištrinta.", "success");
            redirect();
            } 
            else {
                setMessage("Negalima ištrinti sąskaitos, kurioje yra pinigų.", "danger");
                redirect();
            }
        }
    }