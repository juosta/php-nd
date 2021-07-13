<?php $pageName = "Pridėti naują sąskaitą"; ?>
<?php include DIR. 'views/top.php' ?>
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
                    <?php require DIR. 'app/generateAccNo.php'; ?>
                    <input type="text" name='accNo' value = "LT<?= $genAccNo ?>" class="form-control" readonly><br>
                    <label for="personalNo" class="form-label" >Asmens kodas</label>
                    <input type="text" name='personalNo' class="form-control"><br>
                    <div class="col-auto">
                         <button type="submit" class="btn btn-primary">Pridėti sąskaitą</button>
                    </div>
                </form>
            </div>
            <a href="<?= URL ?>" class="link-dark">Grįžti</a>
        </div>
    
        <?php $footerPos = 'fixed';?>
<?php include __DIR__ . '/bottom.php' ?>
