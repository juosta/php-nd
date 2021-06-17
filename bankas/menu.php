<?php if(isset($_SESSION['logged'])) : ?>
    <a href="./" class="link-light">Namai</a>
    <a href="./" class="link-light disabled"><i class="fa fa-user-circle" aria-hidden="true"></i> <b><?=$_SESSION['name']?></b></a>
    <a href="http://localhost/php-nd/bankas/login.php?logout" class="link-light">Log out</a>
<?php else : ?>
        <a href="http://localhost/php-nd/bankas/register.html" class="link-light">Registruotis</a>
<?php endif ?>