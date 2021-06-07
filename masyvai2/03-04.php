<?php
// 3. Sukurkite masyvą iš 10 elementų. Kiekvienas masyvo elementas turi
// būti masyvas su atsitiktiniu kiekiu nuo 2 iki 20 elementų. Elementų
// reikšmės atsitiktinai parinktos raidės iš intervalo A-Z. Išrūšiuokite antro
// lygio masyvus pagal abėcėlę (t.y. tuos kur su raidėm).
echo '<h2>3.</h2>';
echo '<pre>';
$masyvas = array_fill(0,10,array_fill(0,5,''));

foreach($masyvas as &$el)
{  
        $size = rand(2,20);
        $el = array_fill(0,$size,'2');
        foreach($el as &$val)
        {
            $val = chr(rand(65,90));
        }
}
unset($el);
unset($val);
print_r($masyvas);
echo '<hr>';
foreach($masyvas as &$el)
{  
    sort($el);
}
unset($el);
print_r($masyvas);
echo '<hr>';
// 4.Išrūšiuokite trečio uždavinio pirmo lygio masyvą taip, kad elementai kurių masyvai trumpiausi eitų pradžioje. 
// Masyvai kurie turi bent vieną “K” raidę, visada būtų didžiojo masyvo visai pradžioje.
echo '<h2>4.</h2>';
usort($masyvas, function($a, $b) {

    $ak = (int) in_array('K', $a);
    $bk = (int) in_array('K', $b);
    
    if ($ak + $bk == 1) {
        return $bk <=> $ak;
    }
    return count($a) <=> count($b);
    
    });
    print_r($masyvas);