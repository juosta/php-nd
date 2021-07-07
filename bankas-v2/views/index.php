    
    <?php $pageName = "Sąskaitų sąrašas"; ?>
    <?php include DIR. 'views/top.php' ?>
            <div class="row">
                <div class="col-12">
                    <a href="<?= URL ?>create-acc" class="link-primary nauja-sask"><i class="fa fa-plus-circle" aria-hidden="true"></i> Pridėti naują sąskaitą</a>
                </div>
            </div>
            <div class="row">
                <table class="table col-12">
                    <thead>
                        <tr>
                        <th style="width: 15%">Vardas</th>
                        <th style="width: 15%">Pavardė</th>
                        <th style="width: 25%">Sąskaitos nr.</th>
                        <th style="width: 10%">Likutis, Eur</th>
                        <th style="width: 35%">Valdymas</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                        usort($users, function($a, $b) {
                            return $a['surname'] <=> $b['surname'];
                        });
                        ?>
                    <?php foreach($users as $user) :
                        $userId = $user['userId'];
                        $name = $user['name'];
                        $surname = $user['surname'];
                        $accNo = $user['accNo'];
                        $balance = $user['balance'];
                        ?>
                        <tr>
                            <td style="width: 15%"><?=$name?></td>
                            <td style="width: 15%"><?=$surname?></td>
                            <td style="width: 25%"><?=$accNo?></td>
                            <td style="width: 10%"><?=$balance?></td>
                            <td style="width: 35%" >
                                <a href="<?= URL ?>addFunds/<?= $userId ?>" class="btn btn-primary">Pridėti lėšų</a>
                                <a href="<?= URL ?>withdraw/<?= $userId ?>" class="btn btn-primary">Nuskaičiuoti lėšas</a>
                                <form action="<?= URL ?>delete/<?= $userId ?>" method='post' class="lesu-valdymas">
                                    <button type="submit"class="btn btn-danger">Ištrinti</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach ?>
                    </tbody>
                </table>
            </div>
    
<?php include __DIR__ . '/bottom.php' ?>