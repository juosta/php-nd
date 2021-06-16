<?php if(isset($_SESSION['logged'])) : ?>
    <a href="./" class="link-light">Namai</a>
    <a href="./" class="link-light">Welcome!</a>
    <a href="http://localhost/php-nd/bankas/login.php?logout" class="link-light">Log out</a>
<?php else : ?>
        <a href="http://localhost/php-nd/bankas/register.html" class="link-light">Registruotis</a>
<?php endif ?>