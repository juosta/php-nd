<?php
// Sugeneruokite du masyvus, kurių reikšmės yra atsitiktiniai skaičiai nuo 100 iki
// 999. Masyvų ilgiai 100. Masyvų reikšmės turi būti unikalios savo masyve (t.y.
// neturi kartotis).
echo '-------------6------------<br>';
$dydis = 100;
$random1 = [];
$random2 = [];
while(count($random1) < $dydis ){
    array_push($random1, rand(100,999));
    $random1 = array_unique($random1);
}
while(count($random2) < $dydis){
    array_push($random2, rand(100,999));
    $random2 = array_unique($random2);
}
print_r($random1);
echo '<hr>';
print_r($random2);
echo '<hr>';
// Sugeneruokite masyvą, kuris būtų sudarytas iš reikšmių, kurios yra pirmame 6
// uždavinio masyve, bet nėra antrame 6 uždavinio masyve.
echo '-------------7------------<br>';
$diff = array_diff($random1,$random2);
print_r($diff);
echo '<hr>';
echo '-------------8------------<br>';
// Sugeneruokite masyvą iš elementų, kurie kartojasi abiejuose 6 uždavinio
// masyvuose.
$intersect = array_intersect($random1,$random2);
print_r($intersect);
echo '<hr>';
echo '-------------9------------<br>';
// Sugeneruokite masyvą, kurio indeksus sudarytų pirmo 6 uždavinio masyvo
// reikšmės, o jo reikšmės iš būtų antrojo masyvo.
$masyvas9 = [];
for ($i = 0; $i < $dydis; $i++)
{
    $masyvas9[$random1[$i]] = $random2[$i];
}

print_r($masyvas9);
