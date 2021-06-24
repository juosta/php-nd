<?php 
require __DIR__. '/Grybas.php';
require __DIR__. '/Krepsys.php';
$krepsys = new Krepsys();
do { 
    $grybas = new Grybas();
    if(!$grybas->valgomas && !$grybas->sukirmijes){
        $krepsys->kiekis+=$grybas->svoris;
    }
} while ($krepsys->kiekis < Krepsys::DYDIS);
echo $krepsys->kiekis;
echo "<br>";
echo Krepsys::DYDIS;
