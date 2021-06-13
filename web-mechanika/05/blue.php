<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blue</title>
    <style>
    body{
        background-color: blue;
    }
    </style>
</head>
<body>
<h1>BLUE</h1>
<a href="?page=1">Change to red</a>
</body>
</html>

<?php

if(isset($_GET['page'])==1){
    header('Location: http://localhost/php-nd/web-mechanika/05/red.php'); // get
    die;
}