<!-- Suprogramuokite žaidimą. Žaidimas prasideda dviem laukeliais, kuriuose žaidėjai įveda savo vardus ir 
mygtuku “pradėti”. Šone yra rodomas žaidėjų rezultatas. Paspaudus “pradėti” turi atsirasti pirmo žaidėjo 
vardas ir mygtukas “mesti kauliuką”. Jį nuspaudus skriptas automatiškai sugeneruoja skaičių nuo 1 iki 6 ir 
jį prideda prie žaidėjo rezultato, o pirmo žaidėjo vardas pakeičiamas antro žaidėjo vardu (parodo kieno eilė 
“mesti kauliuką”). Žaidimas tęsiamas iki tol, kol kažkuris žaidėjas surenka 30 taškų. Tada parodomas pranešimas 
apie laimėjimą ir vėl leidžiama suvesti žaidėjų vardus ir pradėti žaidimą iš naujo. -->
<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    
header("Location: http://localhost/php-nd/web-mechanika/11/?name1=" . $_GET['name1'] . "&name2=" . $_GET['name2'] . '&rolled=0');
die;
}

if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
    // request 30 minates ago
    session_destroy();
    session_unset();
}
$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kauliukai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/php-nd/web-mechanika/11/style.css">
</head>
<body >
    <header>
    <h1>Kauliukų žaidimas</h1>
    </header>
    <main class="container">
    <?php
    
    if(!isset($_GET['name1']) and !isset($_GET['name2'])){
        echo '<div class="form">
        <form action="http://localhost/php-nd/web-mechanika/11/" method="get">
        <label for="name1"><h3>Pirmo žaidėjo vardas</h3></label>
        <input type="text" name="name1" id="name1" class="form-control">
        <br>
        <label for="name2"><h3>Antro žaidėjo vardas</h3></label>
        <input type="text" name="name2" id="name2" class="form-control">
        <br>
        <button type="submit" class="btn btn-primary">PRADĖTI</button>
        </form>
        </div>  ';
        } else {
            if($_GET['name1'] == null){
                $player1 = "Žaidėjas 1";
            } else {
                $player1 = $_GET['name1'];
             }   
            if($_GET['name2'] == ""){
                $player2 = "Žaidėjas 2";
            } else {
                $player2 = $_GET['name2'];
            }
            _d($_GET);
            ?>
            <div class="zaidimo_laukas row">
                <div class="valdymas col-4"> 
                    <h3>Eilė žaidėjui:</h3>
                    <?php
                    if(!isset($_SESSION["current_player"])){
                        $_SESSION["current_player"] = $player1;
                    }
                    if(isset($_GET['rolled'])){
                        if($_SESSION['current_player'] == $player1){
                            isset($_SESSION['score1']) ? $_SESSION['score1']+=rand(1,6) : $_SESSION['score1'] = rand(1,6);
                            $_SESSION['current_player'] = $player2;
                        } elseif ($_SESSION['current_player'] == $player2){
                            isset($_SESSION['score2']) ? $_SESSION['score2']+=rand(1,6) : $_SESSION['score2'] = rand(1,6);
                            $_SESSION['current_player'] = $player1;
                        }
                    }
                    ?>
                    <h2><?=$_SESSION["current_player"]?></h2>
                    <form action="" method="post">
                        <input type = "hidden" name = "rolled" value = "0"; />
                        <button type="submit" class="btn btn-outline-primary">Mesti kauliuką</button>
                    </form>
                </div>
                <div class="rezultatai col-8"> 
                    <h2>Rezultatas</h2>
                    <table class="table">
                        <thead>
                            <tr>
                            <th>Žaidėjas</th>
                            <th>Taškai</th>
                            </tr>
                        </thead>
                        <tbody> 
                            <tr>
                            <td><?=$player1?></td>
                            <td><?=($_SESSION['score1'] ?? 0)?></td>
                            </tr>
                            <tr>
                            <td><?=$player2?></td>
                            <td><?=($_SESSION['score2'] ?? 0)?></td>
                            </tr>
                        </tbody>
                     </table>
                </div>
            </div>
            <div class="laimetojas">
            <?php
            _d($_GET);
            _d($_POST);
            _d($_SESSION);
            
            if(($_SESSION['score1'] ?? 0) >= 30 or ($_SESSION['score2'] ?? 0) >= 30){
                if($_SESSION['score1'] > $_SESSION['score2'] ){
                    echo "<h1>Laimėjo $player1</h1>";
                } elseif ($_SESSION['score1'] < $_SESSION['score2']){
                    echo "<h1>Laimėjo $player2</h1>";
                }
                echo '<script type="module">
                import confetti from \'https://cdn.skypack.dev/canvas-confetti\';
                confetti();
                </script>';
                session_destroy();
                echo '<a href="http://localhost/php-nd/web-mechanika/11/"class="btn btn-primary">Rinktis kitus žaidėjus</a>';
                echo '</div>';
             }
        }
   ?>
</main>
</body>
</html>