<?php
require __DIR__ . '/Pinigine.php';
$pinigine = new Pinigine;

$pinigine->ideti(0.73);
$pinigine->ideti(100);
$pinigine->ideti(25.33);
$pinigine->ideti(30);

echo "Suma pinigineje: <br>";
$pinigine->skaiciuoti();
echo '<br>';

echo "Kiek banknotu pinigineje: <br>";
echo $pinigine->banknotai();
echo '<br>';
echo "Kiek monetu pinigineje pinigineje: <br>";
echo $pinigine->monetos();


