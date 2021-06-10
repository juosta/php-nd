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
$kiek_paspausta = count($_POST);
//echo $kiek_paspausta;
 if(isset($_GET) && $kiek_paspausta != 0){
    $bodytext='<body style=\'background-color: white;color:black;\'>';
    echo $bodytext;
    echo "<h3>$kiek_paspausta</h3>";
    echo '</body>
    </html>';
    // header('Location: http://localhost/php-nd/web-mechanika/09/'); 
    // die;
}else {

    $bodytext = '<body style=\'background-color: black;color:white;\'>';
    echo $bodytext;

    echo '<form action="http://localhost/php-nd/web-mechanika/09/" method="post">';
    $letters='ABCDEFGHIJ';
    for($i = 0; $i< rand(3,10); $i++){
        echo '<label for="' . $letters[$i] . '"> '. $letters[$i] . '</label>
        <input type="checkbox" name="' . $letters[$i] . '" value="'. $letters[$i] .'"><br>';
    }
    echo '<button type="submit">Push it</button>';
    echo '</form></body>
        </html>';
    
}
?>
        

    

