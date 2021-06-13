<?php
// Sukurti puslapį su juodu fonu ir su dviem linkais (nuorodom) į save.
// Viena nuoroda su failo vardu, o kita nuoroda su failo vardu ir GET duomenų 
// perdavimo metodu perduodamu kintamuoju color=1. Padaryti taip, kad paspaudus
// ant nuorodos su perduodamu kintamuoju fonas nusidažytų raudonai, o paspaudus
// ant nuorodos be perduodamo kintamojo, vėl pasidarytų juodas.
$color = "black";
if (isset($_GET['color']))
{ 
    $color = "red";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1 uzduotis</title>
    <style>
    body{
        background-color: <?=$color?>;
    }
    a{
        display: block;
        color: white;
    }
    </style>
</head>
<body>
    <a href="./index.php"><h2>Juodas fonas</h2></a>
    <a href="./index.php?color=1"><h2>Raudonas fonas</h2></a>
</body>
</html>
