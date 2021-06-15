
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

            <div>
            <?php $id = $_GET['id'] ?? 0 ;
            _d($id,"id");
            foreach($users as $key => $user){
                if($user['userId']==$id){
                    $id=$key;
                    break;
                }
            }
            ?>
                <table class="table">
                    <tr>
                        <td>Vardas</td>
                        <td><?=$users[$key]['name']?> </td>
                    </tr>
                    <tr>
                        <td>Pavardė</td>
                        <td><?=$users[$key]['surname']?> </td>
                    </tr>
                    <tr>
                        <td>Sąskaitos numeris</td>
                        <td><?=$users[$key]['accNo']?> </td>
                    </tr>
                    <tr>
                        <td>Sąskaitos likutis, Eur</td>
                        <td><?=$users[$key]['balance']?> </td>
                    </tr>
                </table>
            </div>
            <form action="?action=addFunds&id=<?=$key?>" method="post" >
            <label for="amount">Suma</label>
            <input type="number" name="amount" class="form-control"><br>
            <button type="submit" class="btn btn-primary">Pridėti lėšas</button>
            </form>
            <a href="./" class="link-dark">Grįžti</a>
            
    </main>
</body>
</html>