<?php if (isset($_SESSION['validationFailure'])) : ?>
    <?= $_SESSION['validationFailure'] ?>
    <?php unset($_SESSION['validationFailure']); ?>
<?php endif ?>