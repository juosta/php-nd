<?php 
require __DIR__. '/Stikline.php';

$stikline1 =  new Stikline(200);
$stikline2 =  new Stikline(150);
$stikline3 =  new Stikline(100);

$stikline1->ipilti(300);
echo $stikline1->kiekis;
echo '<br>';
$stikline2->ipilti($stikline1->ispilti());
echo $stikline1->kiekis;
echo '<br>';
echo $stikline2->kiekis;
echo '<br>';
$stikline3->ipilti($stikline2->ispilti());
echo $stikline2->kiekis;
echo '<br>';
echo $stikline3->kiekis;