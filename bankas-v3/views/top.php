<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageName ?> | Tavo bankas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= URL ?>style.css">
    <script src="https://use.fontawesome.com/653213e940.js"></script>
    
</head>
<body>
<header>
    <div class="container">
        <div class="row">
            <div class="col-12">
            <img src="<?= URL ?>img/bank_logo.png" alt="Logo" style='height: 70px;'>
            <h2>TAVO BANKAS</h2>
            
            <nav> 
            <?php include __DIR__ . '/menu.php' ?>
            </nav>
            </div>
            </div>
        </div>
    </header>
    <?php  include __DIR__ . '/msg.php' ?>
    <main class="container">