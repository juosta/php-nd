<?php
    // 7 uzd Pakartokite 6 uždavinį. Papildykite jį kodu, kuris naršyklę po POST metodo peradresuotų tuo pačiu adresu (t.y. į patį save) jau GET metodu.

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Post mygtukai</title>
</head>
<body>
    <form action="http://localhost/php-nd/web-mechanika/07/" method="get">
    <button type="submit">GET button</button>
    </form>
    <form action="http://localhost/php-nd/web-mechanika/07/" method="post">
    <button type="submit">POST button</button>
    </form>
</body>
</html>
<?php

if($_SERVER['REQUEST_METHOD'] == 'GET'){
   echo  '<style>
    body{
        background-color: #80ff00;
    }
    </style>';
}
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    echo  '<style>
     body{
         background-color: #ffff4d;
     }
     </style>';
    header('Location: http://localhost/php-nd/web-mechanika/07'); // get
    die;
 }