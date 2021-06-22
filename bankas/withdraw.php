
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
    <?php include __DIR__ . '/header.php' ?>
    <?php include __DIR__ . '/msg.php' ?>
    <main class="container">
        <br> <div class="row">
            <h2 class="text-center">Nuskaičiuoti lėšas</h2>
        </div><br>

            <div>
            <?php $id = $_GET['id'] ?? 0 ;
            _d($id,"id"); ?>
            <?php foreach($users as $key => $user) : ?>
                <?php if($user['userId']==$id) : ?>
                    <table class="table">
                        <tr>
                            <td>Vardas</td>
                            <td><?=$user['name']?> </td>
                        </tr>
                        <tr>
                            <td>Pavardė</td>
                            <td><?=$user['surname']?> </td>
                        </tr>
                        <tr>
                            <td>Sąskaitos numeris</td>
                            <td><?=$user['accNo']?> </td>
                        </tr>
                        <tr>
                            <td>Sąskaitos likutis, Eur</td>
                            <td><?=$user['balance']?> </td>
                        </tr>
                    </table>
                </div>
                <form action="?action=withdraw&id=<?=$id?>" method="post" >
                <label for="amount">Suma</label>
                <input type="text" name="amount" class="form-control"><br>
                <button type="submit" class="btn btn-primary">Nuskaičiuoti lėšas</button>
                </form>
                <?php endif ?>
            <?php endforeach ?>
            <a href="./" class="link-dark">Grįžti</a>
            
    </main>
</body>
</html>