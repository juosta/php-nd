 
<?php
    if(!isset($_POST['name']) || empty($_POST['name']) or 
    (!isset($_POST['surname']) || empty($_POST['surname'])) or 
    (!isset($_POST['accNo']) || empty($_POST['accNo'])) or 
    (!isset($_POST['personalNo']) || empty($_POST['personalNo']))
    ){
        $error = true;
    }
    // if($_SERVER['REQUEST_METHOD'] == 'POST' && !isset($error)) {
    // header("Location: http://localhost/php-nd/bank/saskaitos.php");
    // die;
    // }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pridėti naują sąskaitą | Tavo bankas</title>
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
    <main class="container">
        <br> <div class="row">
            <h2 class="text-center">Pridėti naują sąskaitą</h2>
        </div><br>
        <div class="row">
            <div class="col-12">
                <form action="" class="form-control" method="post">
                    <label for="name" class="form-label" >Vardas</label>
                    <?php if(($_SERVER['REQUEST_METHOD'] == 'POST') && (!isset($_POST['name']) || empty($_POST['name']))) : ?>
                        <p class="text-danger">Laukas privalomas</p>
                    <?php endif ?>
                    <input type="text" name='name' class="form-control"><br>

                    <label for="surname" class="form-label">Pavarde</label>
                    <?php if(($_SERVER['REQUEST_METHOD'] == 'POST') && (!isset($_POST['surname']) || empty($_POST['surname']))) : ?>
                        <p class="text-danger">Laukas privalomas</p>
                    <?php endif ?>
                    <input type="text" name='surname' class="form-control"><br>

                    <label for="accNo" class="form-label">Sąskaitos numeris</label>
                    <?php if(($_SERVER['REQUEST_METHOD'] == 'POST') && (!isset($_POST['accNo']) || empty($_POST['accNo']))) : ?>
                        <p class="text-danger">Laukas privalomas</p>
                    <?php endif ?>
                    <input type="text" name='accNo' class="form-control"><br>
                    <label for="personalNo" class="form-label" >Asmens kodas</label>
                    <?php if(($_SERVER['REQUEST_METHOD'] == 'POST') && (!isset($_POST['personalNo']) || empty($_POST['personalNo']))) : ?>
                        <p class="text-danger">Laukas privalomas</p>
                    <?php endif ?>
                    <input type="text" name='personalNo' class="form-control"><br>
                    <div class="col-auto">
                         <button type="submit" class="btn btn-primary">Pridėti sąskaitą</button>
                         <?php _d($_POST); ?>
                    </div>
                    <?php 
                        include 'addnewaccount.php';
                    ?>
                </form>
            </div>
        </div>
    
    </main>
</body>
</html>
