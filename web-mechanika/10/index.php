<!-- Padarykite juodą puslapį, kuriame būtų POST forma, mygtukas ir atsitiktinis kiekis (3-10) 
checkbox su raidėm A,B,C… Padarykite taip, kad paspaudus mygtuką, fono spalva pasikeistų į baltą, 
forma išnyktų ir atsirastų skaičius, rodantis kiek buvo pažymėta checkboksų (ne kurie, o kiek).  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>10 uzduotis</title>
</head>
<?php

session_start();

 if(isset($_GET) && count($_POST) != 0){
    header('Location: http://localhost/php-nd/web-mechanika/10/?kiek='.count($_POST)); 
    die;
 }

if (isset($_GET['kiek']) && isset($_SESSION['generuota'])){
    echo'<body style=\'background-color: white;color:black;\'>';
    echo '<h3> Kiek paspausta: ' . $_GET['kiek'] . '</h3>';
    echo "<h3> Kiek generuota: ". $_SESSION['generuota'] ."</h3>";
    session_destroy();
} else {
    $generuota  = 0;
    echo '<body style=\'background-color: black;color:white;\'>';

    echo '<form action="http://localhost/php-nd/web-mechanika/10/" method="post">';
    $letters='ABCDEFGHIJ';
    for($i = 0; $i< rand(3,10); $i++){
        echo '<label for="' . $letters[$i] . '"> '. $letters[$i] . '</label>
        <input type="checkbox" name="' . $letters[$i] . '" value="'. $letters[$i] .'"><br>';
        $generuota++;
    }
    echo '<button type="submit">Push it</button>';
    echo '</form>';
}
if (!isset($_SESSION['generuota'] )) {
    $_SESSION['generuota'] = $generuota;
}
?>
        
</body>
</html>
        

    

