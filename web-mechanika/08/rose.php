
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rose</title>
    <style>
    body{
        background-color: #c21e56;
    }
    </style>
</head>
<body>
<h1>Rose</h1>

</body>
</html>
<pre>
<?php


if($_SERVER["REQUEST_URI"]  == "/php-nd/web-mechanika/08/rose.php"){

    header('Location: http://localhost/php-nd/web-mechanika/08/pink.php'); // get
    die;
}