<?php
// Sukurkite masyvą iš 10 elementų. Jo reikšmės masyvai iš 10 elementų. Antro lygio masyvų reikšmės masyvai
//  su dviem elementais value ir color. Reikšmė value vienas iš atsitiktinai parinktų simbolių: #%+*@裡, o 
//  reikšmė color atsitiktinai sugeneruota spalva formatu: #XXXXXX. Pasinaudoję masyvų atspausdinkite “kvadratą” 
//  kurį sudarytų masyvo reikšmės nuspalvintos spalva color.
//$masyvas[];
echo '<pre>';
$x='#%+*@裡';
$x = ['#','%', '+', '*','@', '裡' ];
$y = '0123456789ABCDEF';
foreach (range(1, 10) as $keybig => $_) {
    foreach (range(1, 10) as $keysmall => $_) {
        $masyvas[$keybig][$keysmall]['value'] = $x[rand(0,5)];
        $masyvas[$keybig][$keysmall]['color'] = '#'. $y[rand(0,15)] . $y[rand(0,15)] . $y[rand(0,15)] . $y[rand(0,15)] . $y[rand(0,15)]. $y[rand(0,15)];
    }
}
//print_r($masyvas);

foreach ($masyvas as $keybig => $el) {
    foreach ($el as $keysmall => $val) {
        $symbol = $val['value'];
        $color = $val['color'];
        if($symbol == '裡'){
            echo "<span style='color:$color;padding:6px' class='format'>$symbol</span>";
        }
        else {
            echo "<span style='color:$color;' class='format'>$symbol</span>";
        }
    }
    echo '<br>';
}

?>
<style>
.format{
    padding:9px;
    line-height: 22px;
}
</style>