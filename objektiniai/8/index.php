<?php
require __DIR__ . '/Pinigine.php';
$pinigine = new Pinigine;

$pinigine->ideti(0.73);
$pinigine->ideti(5300);

$pinigine->skaiciuoti();
echo '<br>';

echo $pinigine->banknotai();
echo '<br>';
echo $pinigine->monetos();


