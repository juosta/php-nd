<?php $pageName = "Prisijungti"; ?>
<?php include DIR. 'views/top.php' ?>
    <div class="row login">
        <div class="col-12">
            <h1>Prisijungti</h1>
            <form action="<?=URL?>login" method="post">
                <label for="personalNo">Darbuotojo kodas</label>
                <input type="text" name="id" class="form-control">
                <label for="pass">Slaptažodis</label>
                <input type="password" name="pass" class="form-control"><br>
                 <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
<?php $footerPos = 'fixed';?>
<?php include __DIR__ . '/bottom.php' ?>