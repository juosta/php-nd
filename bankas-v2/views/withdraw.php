<?php namespace Bank; ?>
    <?php $pageName = "Nuskaičiuoti lėšas"; ?>
    <?php include DIR. 'views/top.php' ?>
        <br> <div class="row">
            <h2 class="text-center">Nuskaičiuoti lėšas</h2>
        </div><br>
            <div>
            <?php $user =  Json::getJson()->show($id);?>
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
                <form action="<?= URL ?>withdraw/<?=$id?>" method="post" >
                <label for="amount">Suma</label>
                <input type="text" name="amount" class="form-control"><br>
                <button type="submit" class="btn btn-primary">Nuskaičiuoti lėšas</button>
                </form>
            <a href="<?= URL ?>" class="link-dark">Grįžti</a>
<?php $footerPos = 'fixed';?>
<?php include __DIR__ . '/bottom.php' ?>