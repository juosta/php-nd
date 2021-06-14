<?php
include 'Users.php';
$string = "";
$data = fopen("data.json", "r") or die("Unable to open file!");
while(!feof($data)) {
    $string = $string . fgets($data);
  }
$json_array = json_decode($string, true);
_d($json_array);
fclose($data);if($_SERVER['REQUEST_METHOD'] == 'POST' && !isset($error)) {
    $data = fopen("data.json", "w") or die("Unable to open file!");
    $newacc = new User(count($json_array['users'])+1, $_POST['name'], $_POST['surname'], $_POST['accNo'], $_POST['personalNo']);
    $vars = get_object_vars($newacc);
    $length = count($json_array['users']);
    $setid = $json_array['users'][$length]['userId'] + 1;
    foreach($json_array['users'][0] as $key => $value)
    {   
        $json_array['users'][$setid][$key] = $vars[$key];

    }
    $newJson = json_encode($json_array);
    fwrite($data, $newJson);
    fclose($data);
}
if($_SERVER['REQUEST_METHOD'] == 'POST' && !isset($error)) {
    header("Location: http://localhost/php-nd/bank/saskaitos.php");
    die;
}