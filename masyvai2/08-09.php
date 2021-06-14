<?php
// Sukurkite masyvą iš 10 elementų. Masyvo reikšmes užpildykite pagal taisyklę: generuokite skaičių nuo 0 iki 5. Ir sukurkite tokio ilgio masyvą. 
// Jeigu reikšmė yra 0 masyvo nekurkite. Antro lygio masyvo reikšmes užpildykite atsitiktiniais skaičiais nuo 0 iki 10. Ten kur masyvo nekūrėte 
// reikšmę nuo 0 iki 10 įrašykite tiesiogiai.
echo '<h3>8.</h3>';
echo '<pre>';
foreach (range(1, 10) as $keybig => $_) {
    $sk = rand(0,5);
    if($sk == 0){
        $masyvas[$keybig] = rand(0,10);
    } else {
        foreach(range(1, $sk) as $keysmall => $_){
            $masyvas[$keybig][$keysmall] = rand(0,10);
        }
    }
}
print_r($masyvas);

echo '<hr>';
// Paskaičiuokite 8 uždavinio masyvo visų reikšmių sumą ir išrūšiuokite masyvą taip, kad pirmiausiai eitų mažiausios masyvo reikšmės arba jeigu 
// reikšmė yra masyvas, to masyvo reikšmių sumos.
echo '<h3>9.</h3>';
echo '<pre>';

usort($masyvas,function($a, $b) {
    if(is_array($a) && is_array($b)){
        return array_sum($a) <=> array_sum($b);
    } 
    return $a <=> $b;
    
});
print_r($masyvas);

// usort($masyvas, function($a, $b) {

//     $asum = 0;

//     if(is_array($a)) {

//         foreach($a as $value) {

//             $asum += $value;

//         }

//         $a = $asum;

//     }

    

//     $bsum = 0; 

//     if(is_array($b)) {

//         foreach($b as $value) {

//             $bsum += $value;

//         }

//         $b = $bsum;

//     }

//     return $a <=> $b;

// }

// );

// foreach($masyvas as $i => $el)
// {
//     if(is_array($el)){
//         $sumos[$i]=array_sum($el);
//     } else 
//     {
//         $sumos[$i] = $el;
//     }
// }
// print_r($sumos);