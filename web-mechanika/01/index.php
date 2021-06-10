<?php
// Sukurti puslapį su juodu fonu ir su dviem linkais (nuorodom) į save.
// Viena nuoroda su failo vardu, o kita nuoroda su failo vardu ir GET duomenų 
// perdavimo metodu perduodamu kintamuoju color=1. Padaryti taip, kad paspaudus
// ant nuorodos su perduodamu kintamuoju fonas nusidažytų raudonai, o paspaudus
// ant nuorodos be perduodamo kintamojo, vėl pasidarytų juodas.

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEB Mechanika</title>
    <style>
    body{
        background-color: black;
    }
    a{
        display: block;
        color: white;
    }
    </style>
</head>
<body>
    <a href="./"><h2>WEB mechanika</h2></a>
    <a href="?color=1"><h2>WEB mechanika su parametru</h2></a>
</body>
</html>

<?php
if ($_GET['color'] == '1')
{
    echo '<style>
    body{
        background-color: red;
    }
    a{
        display: block;
        color: black;
    }
    </style>';
}
