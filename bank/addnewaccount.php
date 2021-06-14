<?php
include 'Users.php';
if($_SERVER['REQUEST_METHOD'] == 'POST' && !isset($error)) {
    $data = fopen("data.json", "w") or die("Unable to open file!");
    $newacc = new User(count($json_array['users'])+1, $_POST['name'], $_POST['surname'], $_POST['accNo'], $_POST['personalNo']);
    $vars = get_object_vars($newacc);
    $length = count($json_array['users']);
    foreach($json_array['users'][0] as $key => $value)
    {   
        $json_array['users'][$length][$key] = $vars[$key];

    }
    $newJson = json_encode($json_array);
    fwrite($data, $newJson);
    fclose($data);
}