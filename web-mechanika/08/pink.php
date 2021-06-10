<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pink</title>
    <style>
    body{
        background-color: pink;
    }
    </style>
</head>
<body>
<h1>Pink</h1>
    <form action="http://localhost/php-nd/web-mechanika/08/pink.php" method="post">
    <button type="submit">GO TO ROSE</button>
    </form>
</body>
</html>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    header('Location: http://localhost/php-nd/web-mechanika/08/rose.php'); // get
    die;
 }
 if($_SERVER["REQUEST_URI"]  == "/php-nd/web-mechanika/08/rose.php"){

    header('Location: http://localhost/php-nd/web-mechanika/08/pink.php'); // get
    die;
}

