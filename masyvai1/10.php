<?php
// 10. Sugeneruokite 10 skaičių masyvą pagal taisyklę: Du pirmi skaičiai- atsitiktiniai
// nuo 5 iki 25. Trečias, pirmo ir antro suma. Ketvirtas- antro ir trečio suma.
// Penktas trečio ir ketvirto suma ir t.t.
$masyvas=[rand(5,25),rand(5,25)];
for ($i = 2 ; $i < 10; $i++)
{
    $masyvas[$i]=$masyvas[$i-1]+$masyvas[$i-2];
}
echo '<pre>';
print_r($masyvas);