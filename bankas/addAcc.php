
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pridėti naują sąskaitą | Tavo bankas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/653213e940.js"></script>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <?php include __DIR__ . '/header.php' ?>
    <?php require __DIR__ . '/msg.php' ?>
    <main class="container">
        <br> <div class="row">
            <h2 class="text-center">Pridėti naują sąskaitą</h2>
        </div><br>
        <div class="row">
            <div class="col-12">
                <form action="" class="form-control" method="post">
                    <label for="name" class="form-label" >Vardas</label>
                    <input type="text" name='name' class="form-control"><br>

                    <label for="surname" class="form-label">Pavarde</label>
                    <input type="text" name='surname' class="form-control"><br>

                    <label for="accNo" class="form-label">Sąskaitos numeris</label>
                    <?php require __DIR__. '/generateAccNo.php'; ?>
                    <input type="text" name='accNo' value = "LT<?= $genAccNo ?>" class="form-control" readonly><br>
                    <label for="personalNo" class="form-label" >Asmens kodas</label>
                    <input type="text" name='personalNo' class="form-control"><br>
                    <div class="col-auto">
                         <button type="submit" class="btn btn-primary">Pridėti sąskaitą</button>
                    </div>
                </form>
            </div>
            <a href="./" class="link-dark">Grįžti</a>
        </div>
    
    </main>
</body>
</html>
