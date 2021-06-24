<?php

require __DIR__ . '/MarsoPalydovas.php';

$palydovas1 = MarsoPalydovas::getMarsoPalydovas('Deimas');
$palydovas2 = MarsoPalydovas::getMarsoPalydovas('Fobas');
$palydovas3 = MarsoPalydovas::getMarsoPalydovas('Naujas');

echo $palydovas1->getTitle();
echo '<br>';
echo $palydovas2->getTitle();
echo '<br>';
echo $palydovas3->getTitle();