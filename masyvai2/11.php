<?php
do {
$a = rand(0, 1000);
$b = rand(0, 1000);
} while ($a == $b);
$long = rand(10,30);
$sk1 = $sk2 = 0;
echo '<h3>Skaičiai '.$a.' ir '.$b.'</h3>';
$c = [];
for ($i=0; $i<$long; $i++) {
$c[] = array_rand(array_flip([$a, $b]));
}
echo '<h4>Masyvas:</h4>';
echo '<pre>';
print_r($c);
echo '</pre>';


echo '<h3>Skaičius '.$a.' yra pakartotas '.$sk1.' kartų, o skaičius '.$b.'
- '.$sk2.' kartų.</h3>';
