<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pridėti lėšas | Tavo bankas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <header>
        <img src="./img/bank_logo.png" alt="Logo" style='height: 70px;'>
        <nav> 
        <a href="./" class="link-light">Namai</a>
        <a href="./" class="link-dark">Welcome!</a>
        </nav>
    </header>
    <main>
    <main class="container">
        <br> <div class="row">
            <h2 class="text-center">Pridėti lėšų</h2>
        </div><br>

        <?php include 'read-file.php';
        _d($_POST, "POST");
        if(isset($_POST['addId'])){
            $_SESSION['addFundsId'] = $_POST['addId'];
        }
        _d($_SESSION, "Session");
            $addToUserId = $_SESSION['addFundsId'];
            _d($_GET, "GET");
                //find user
                foreach($json_array['users'] as $key => $user){
                    if($user["userId"] == $addToUserId)
                    {
                        $_SESSION["addToUser"] = $key;
                        break;
                    }
                }
                $addToUser=$_SESSION["addToUser"];
                _d($addToUser);
                ?>

            <div>
                <table class="table">
                    <tr>
                        <td>Vardas</td>
                        <td><?=$json_array['users'][$addToUser]['name']?> </td>
                    </tr>
                    <tr>
                        <td>Pavardė</td>
                        <td><?=$json_array['users'][$addToUser]['surname']?> </td>
                    </tr>
                    <tr>
                        <td>Sąskaitos numeris</td>
                        <td><?=$json_array['users'][$addToUser]['accNo']?> </td>
                    </tr>
                    <tr>
                        <?php
                        if( isset($_GET['amount'])){
                        $amount = $_GET['amount'];
                        $balance = $json_array['users'][$addToUser]['balance'];
                        $json_array['users'][$addToUser]['balance'] = $balance + $amount;

                        $data = fopen("data.json", "w") or die("Unable to open file!");
                        $newJson = json_encode($json_array);
                        fwrite($data, $newJson);
                        fclose($data);
                        header("Location: http://localhost/php-nd/bank/papildyti.php");
                        die;
                        }?>
                        <td>Sąskaitos likutis, Eur</td>
                        <td><?=$json_array['users'][$addToUser]['balance']?> </td>
                    </tr>
                </table>
            </div>
            <form action="" method="get" >
            <label for="amount">Suma</label>
            <input type="number" name="amount" class="form-control"><br>
            <button type="submit" class="btn btn-primary">Pridėti lėšas</button>
            </form>
            <a href="./saskaitos.php" class="link-dark">Grįžti</a>
            
    </main>
</body>
</html>