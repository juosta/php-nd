<?php
//_d($_SERVER['REQUEST_METHOD'], 'metodas ---->');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    header('Location: http://localhost/barsukas/10/?ok'); // get
    die;

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skaiciuoti</title>
</head>
<body>
<?php

//_d($_GET, 'Masyvas $_GET ---->');
// _d($_POST, 'Masyvas $_POST ---->');
// if (isset($_GET['xxx']) && isset($_GET['yyy'])) {
// $x = $_GET['xxx'];
// $y = $_GET['yyy'];
// echo $x * $y;
// }
// if (isset($_GET['rodyti'])) {
//     if ($_GET['rodyti'] == 'vovere') {
//         echo 'Rodom voveres', ' Puslapis: '. ($_GET['puslapis'] ?? 1);
//     }
//     elseif ($_GET['rodyti'] == 'zuikis') {
//         echo 'Rodom zuikius', ' Puslapis: '. ($_GET['puslapis'] ?? 1);
//     }
//     else {
//         echo 'Tokio neturim';
//     }
// }

// else {
//     if(isset($_GET['ok'])) {
//         echo '<div style="color:red;">duomenys gauti</div>';
//     }
//     echo 'Sveiki atvykę į mūsų puslapį';
// }




?>

<form style="margin:30px;" action="http://localhost/php-nd/web-mechanika/" method="get">
    <h3>Suma</h3>
    X: <input type="number" name="xx"> <br><br>
    Y: <input type="number" name="yy">
    <br><br>
    <button type="submit">Skaiciuoti</button>
</form>

<!-- <form style="margin:30px;" action="http://localhost/barsukas/10/" method="post">
    <h3>POST</h3>
    Ką rodyti: <input type="text" name="rodyti">
    Puslapis: <input type="text" name="puslapis">
    <button type="submit">žiūrėti</button>
</form> -->
</body>
</html>


<?php


//_d($_GET, 'Masyvas $_GET ---->');
// _d($_POST, 'Masyvas $_POST ---->');
if (isset($_GET['xx']) && isset($_GET['yy'])) {
$x = $_GET['xx'];
$y = $_GET['yy'];
echo "<h3 style=\"margin-left: 30px;\">$x + $y = " .  $x + $y . '</h3>';
}