<!-- Padarykite juodą puslapį, kuriame būtų POST forma, mygtukas ir atsitiktinis kiekis (3-10) 
checkbox su raidėm A,B,C… Padarykite taip, kad paspaudus mygtuką, fono spalva pasikeistų į baltą, 
forma išnyktų ir atsirastų skaičius, rodantis kiek buvo pažymėta checkboksų (ne kurie, o kiek).  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>9 uzduotis</title>
</head>
<?php
session_start();
if (!isset($_SESSION['kiek'] )) {
    $_SESSION['kiek'] = rand(3,10);
}

$kiek_paspausta = count($_POST);

 if(isset($_POST) && $kiek_paspausta > 0){
    $bodytext='<body style=\'background-color: white;color:black;\'>';
    echo $bodytext;
    echo "<h3> Kiek paspausta: $kiek_paspausta</h3>";
    echo "<h3> Kiek generuota: ". $_SESSION['kiek'] ."</h3>";
    echo '</body>
    </html>';
    session_destroy();
    // header('Location: http://localhost/php-nd/web-mechanika/10/'); 
    //die;
}else {

    $bodytext = '<body style=\'background-color: black;color:white;\'>';
    echo $bodytext;

    echo '<form action="http://localhost/php-nd/web-mechanika/10/" method="post">';
    $letters='ABCDEFGHIJ';
    for($i = 0; $i < $_SESSION['kiek'] ; $i++){
        echo '<label for="' . $letters[$i] . '"> '. $letters[$i] . '</label>
        <input type="checkbox" name="' . $letters[$i] . '" value="'. $letters[$i] .'"><br>';
    }
    echo '<button type="submit">Push it</button>';
    echo '</form></body>
        </html>';
    
}

        

    

