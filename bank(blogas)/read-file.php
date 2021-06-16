<?php
    $string = "";
    $data = fopen("data.json", "r") or die("Unable to open file!");
    while(!feof($data)) {
        $string = $string . fgets($data);
      }
    $json_array = json_decode($string, true);
    _d($json_array);
    fclose($data);
