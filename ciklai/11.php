<?php
// 11. Sugeneruokite stringą, kurį sudarytų 50 atsitiktinių skaičių nuo 1 iki 200,
// atskirtų tarpais. Skaičiai turi būti unikalūs (t.y. nesikartoti).
// Sugeneruokite antrą stringą, pasinaudodami pirmu, palikdami jame tik
// pirminius skaičius (t.y tokius, kurie dalinasi be liekanos tik iš 1 ir patys
// savęs). Skaičius stringe sudėliokite didėjimo tvarka, nuo mažiausio iki
// didžiausio.

$random = [];
while(count($random) < 50 ){
    array_push($random, rand(1,200));
    $random = array_unique($random);
}
echo 'Atsitiktiniu skaiciu stringas: <br>';
echo implode(' ',$random);
echo '<br>';
echo 'Pirminiu skaiciu stringas: <br>';
for ($k = 0 ; $k < count($random); $k++){
    $value=false;
    $sk=$random[$k]; 
    if($sk == 1 ){
        continue;
    } 
    for ($i = 2; $i <= $sk-1; $i++) {  
        if ($sk % $i == 0) {  
            $value= True;  
            break;
        }  
    }  
    if ($value) {  
        continue;
    }   
    echo $sk . ' ';
}