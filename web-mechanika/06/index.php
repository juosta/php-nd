<?php


?>
<!-- Padarykite puslapį su dviem mygtukais. Mygtukus įdėkite į dvi skairtingas formas- vieną GET ir kitą POST.
 Nenaudodami jokių konkrečių $_GET ar $_POST reikšmių, nuspalvinkite foną žaliai, kai paspaustas mygtukas
  iš GET formos ir geltonai- kai iš POST. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Post mygtukai</title>
</head>
<body>
    <form action="http://localhost/php-nd/web-mechanika/06/" method="get">
    <button type="submit">GET button</button>
    </form>
    <form action="http://localhost/php-nd/web-mechanika/06/" method="post">
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

    // 7 uzd Pakartokite 6 uždavinį. Papildykite jį kodu, kuris naršyklę po POST metodo peradresuotų tuo pačiu adresu (t.y. į patį save) jau GET metodu.
    //  header('Location: http://localhost/php-nd/web-mechanika/06'); // get
    //  die;
 }