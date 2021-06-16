<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sąskaitų sąrašas | Tavo bankas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    
</head>
<body>
    <?php include __DIR__ . '/header.php' ?>
    <?php include __DIR__ . '/msg.php' ?>
    <main class="container">
            <div class="row">
                <div class="col-12">
                    <a href="?action=addAcc" class="link-primary nauja-sask"><span class="plus">+</span> Pridėti naują sąskaitą</a>
                </div>
            </div>
            <div class="row">
                <table class="table col-12">
                    <thead>
                        <tr>
                        <th style="width: 15%">Vardas</th>
                        <th style="width: 15%">Pavarde</th>
                        <th style="width: 25%">Sąskaitos nr.</th>
                        <th style="width: 10%">Likutis, Eur</th>
                        <th style="width: 35%">Valdymas</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php _d($users, "users masyvas"); ?>
                    <?php 
                        usort($users, function($a, $b) {
                            return $a['surname'] <=> $b['surname'];
                        });
                        ?>
                    <?php foreach($users as $value) :
                        $userId = $value['userId'];
                        $name = $value['name'];
                        $surname = $value['surname'];
                        $accNo = $value['accNo'];
                        $balance = $value['balance'];
                        ?>
                        <tr>
                            <td style="width: 15%"><?=$name?></td>
                            <td style="width: 15%"><?=$surname?></td>
                            <td style="width: 25%"><?=$accNo?></td>
                            <td style="width: 10%"><?=$balance?></td>
                            <td style="width: 35%" >
                                <a href="?action=addFunds&id=<?= $userId ?>" class="btn btn-primary">Pridėti lėšų</a>
                                <a href="?action=withdraw&id=<?= $userId ?>" class="btn btn-primary">Nuskaičiuoti lėšas</a>
                                <form action="?action=delete&id=<?= $userId ?>" method='post' class="lesu-valdymas">
                                    <button type="submit"class="btn btn-danger">Ištrinti</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach ?>
                    </tbody>
                </table>
            </div>
    </main>



</body>
</html>

