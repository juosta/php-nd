<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tavo bankas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <script src="https://use.fontawesome.com/653213e940.js"></script>
</head>
<body>
    <header>
        <img src="./img/bank_logo.png" alt="Logo" style='height: 70px;'>
        <nav> 
        <a href="./" class="link-light">Namai</a>
        <?php if (!isset($_SESSION['logged'])) : ?>
            <a href="./login.php">Login</a>
        <?php else : ?>
            <a href="./login.php?logout">Logout</a>
        </div>
        <?php endif ?>
        <a href="./img/bank_logo.png" class="link-light">Registruotis</a>
        <a href="./img/bank_logo.png" class="link-light">Prisijungti</a>
        </nav>
    </header>
    <main>
    
    </main>
</body>
</html>