<?php
// Sugeneruokite 101 elemento masyvą su atsitiktiniais skaičiais nuo 0 iki 300.
// Reikšmes kurios tame masyve yra ne unikalios pergeneruokite iš naujo taip,
// kad visos reikšmės masyve būtų unikalios. Išrūšiuokite masyvą taip, kad jo
// didžiausia reikšmė būtų masyvo viduryje, o einant nuo jos link masyvo
// pradžios ir pabaigos reikšmės mažėtų. Paskaičiuokite pirmos ir antros masyvo
// dalies sumas (neskaičiuojant vidurinės). Jeigu sumų skirtumas (modulis,
// absoliutus dydis) yra didesnis nei | 30 | rūšiavimą kartokite. (Kad sumos
// nesiskirtų viena nuo kitos daugiau nei per 30)
$dydis = 101;
$random1 = [];
while(count($random1) < $dydis ){
    array_push($random1, rand(0,300));
    $random1 = array_unique($random1);
}
print_r($random1);
$maxval = max($random1);
$isrusiuotas =[];
$isrusiuotas[$dydis/2] = $maxval;
unset($random1[array_keys($random1, $maxval)[0]]);
echo '<hr>';
$middle = ceil($dydis/2);
for($i = 0; $i < $middle-1; $i++)
{
    $maxval = max($random1);
    $isrusiuotas[($dydis/2)+$i+1] = $maxval;
    unset($random1[array_keys($random1, $maxval)[0]]);
    if(!empty($random1)){
    $maxval = max($random1);
    $isrusiuotas[($dydis/2)-$i-1] = $maxval;
    unset($random1[array_keys($random1, $maxval)[0]]);
    }
}
print_r($isrusiuotas);
echo '<br>';
