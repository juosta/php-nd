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
    <header>
        <img src="./img/bank_logo.png" alt="Logo" style='height: 70px;'>
        <nav> 
        <a href="./" class="link-light">Namai</a>
        <a href="./" class="link-dark">Welcome!</a>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <a href="./nauja-saskaita.php" class="link-primary nauja-sask"><span class="plus">+</span> Pridėti naują sąskaitą</a>
                </div>
            </div>
            <div class="row">
                <table class="table col-12">
                    <thead>
                        <tr>
                        <th style="width: 15%">Vardas</th>
                        <th style="width: 15%">Pavarde</th>
                        <th style="width: 25%">Sąskaitos nr.</th>
                        <th style="width: 15%">Likutis</th>
                        <th style="width: 30%">Valdymas</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php include 'Users.php';
                    foreach($json_array['users'] as $value) :
                        $name = $value['name'];
                        $surname = $value['surname'];
                        $accNo = $value['accNo'];
                        $balance = $value['balance'];
                        ?>
                        <tr>
                            <td style="width: 15%"><?=$name?></td>
                            <td style="width: 15%"><?=$surname?></td>
                            <td style="width: 25%"><?=$accNo?></td>
                            <td style="width: 15%"><?=$balance?></td>
                            <td style="width: 30%">
                                <a href="./papildyti.php"class="btn btn-primary">Pridėti lėšų</a>
                                <a href="./nuskaiciuoti.php"class="btn btn-primary">Nuskaičiuoti lėšas</a>
                                <button type="submit"class="btn btn-danger">Ištrinti</button>
                            </td>
                        </tr>
                    <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>



</body>
</html>

