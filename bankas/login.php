<?php
require __DIR__ . '/bootstrap.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_GET['logout'])) {
        //2. Atjungia juseri
        unset($_SESSION['logged'], $_SESSION['name']);
        setMessage('Iki pasimatymo!', "primary");
        header('Location: http://localhost/php-nd/bankas/login.php');
        die;
    }
        //1. Rodyti forma
}
else {
    //2. Tikrint prisijungimo duomenis
    $employees = json_decode( file_get_contents(__DIR__.'/employees.json'), 1);
    foreach ($employees as $user) {
        if ($user['id'] == $_POST['id']) {
            if ($user['pass'] == md5($_POST['pass'])) {
                $_SESSION['logged'] = 1;
                $_SESSION['name'] = $user['name'];
                setMessage('Sveiki, '.$user['name'], "primary");
                redirect();
                die;
            }
        }
    }
    setMessage('Neteisingi prisijungimo duomenys.', "danger");
    header('Location: http://localhost/php-nd/bankas/login.php');
    die;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Tavo bankas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <script src="https://use.fontawesome.com/653213e940.js"></script>
</head>
<body>
    <?php include __DIR__ . '/header.php' ?>
    <?php include __DIR__ . '/msg.php' ?>
    <main class="container">
            <div class="row login">
                <div class="col-12">
                    <h1>Prisijungti</h1>
                    <form action="http://localhost/php-nd/bankas/login.php" method="post">
                        <label for="personalNo">Darbuotojo kodas</label>
                        <input type="text" name="id" class="form-control">
                        <label for="pass">Slaptažodis</label>
                    <input type="password" name="pass" class="form-control"><br>
                    <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                    </div>
                    </div>
                    </main>
</body>
</html>