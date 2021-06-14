<?php   
include 'read-file.php';
_d($_SESSION);
if(isset($_SESSION['deleteid'])){
    foreach($json_array['users'] as $key => $user){
        if($_SESSION['deleteid'] == 1){
            break;
        }
        if($user['userId'] == $_SESSION['deleteid'])
        {
            _d("atejo iki cia");
            _d($user);
            _d($user['userId']);
            unset($json_array['users'][$key]);
        }
    }
    $data = fopen("data.json", "w") or die("Unable to open file!");
    $newJson = json_encode($json_array);
    fwrite($data, $newJson);
    fclose($data);
    unset($_SESSION['deleteid']);
}
_d($json_array);
if($_SERVER['REQUEST_METHOD'] == 'POST' && !isset($error)) {
    header("Location: http://localhost/php-nd/bank/saskaitos.php");
    die;
}