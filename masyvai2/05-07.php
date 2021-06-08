<?php 
// Sukurkite masyvą iš 30 elementų. Kiekvienas masyvo elementas yra masyvas [user_id => xxx, place_in_row 
// => xxx] user_id atsitiktinis unikalus skaičius nuo 1 iki 1000000, place_in_row atsitiktinis skaičius nuo 0
//  iki 100. 
echo '<h3>5.</h3>';
echo '<pre>';
// $masyvas = array_fill(0,30,['user_id'=>'','place_in_row'=>'']);
// foreach ($masyvas as $key => &$val) {
//     $val['user_id']=rand(1,1000000);
//     $val['place_in_row']= rand(0,100);
// }
// unset($val);
// print_r($masyvas);

$masyvas = [];
do {
    $uid = rand(1,1000000);
    foreach($masyvas as $user){
        if($user['user_id'] == $uid){
            continue 2;
        }
    }
    $masyvas[] = [
        'user_id'=>$uid,
        'place_in_row'=>rand(0,100)
    ];
} while (count($masyvas) < 30);
print_r($masyvas);
echo '<hr>';
// Išrūšiuokite 5 uždavinio masyvą pagal user_id didėjančia tvarka. Ir paskui išrūšiuokite pagal 
// place_in_row mažėjančia tvarka.
echo '<h3>6.</h3>';
echo '<h4> pagal user_id didėjančia tvarka</h4>';
usort($masyvas, function($a, $b) {
    return $a['user_id'] <=> $b['user_id'];
});
print_r($masyvas);
echo '<hr>';
echo '<h4>pagal place_in_row mažėjančia tvarka</h4>';
usort($masyvas, function($a, $b) {
    return $b['place_in_row'] <=> $a['place_in_row'];
});

print_r($masyvas);
echo '<hr>';
// Prie 6 uždavinio masyvo antro lygio masyvų pridėkite dar du elementus: name ir surname. Elementus 
// užpildykite stringais iš atsitiktinai sugeneruotų lotyniškų raidžių, kurių ilgiai nuo 5 iki 15.
echo '<h3>7.</h3>';
foreach($masyvas as &$el)
{
        $el['name'] = ucfirst(generuotiAtsitiktiniStr(rand(5,15)));
        $el['surname']=ucfirst(generuotiAtsitiktiniStr(rand(5,15)));
}
unset($el);
print_r($masyvas);

function generuotiAtsitiktiniStr($length = 3) {
    return substr(str_shuffle(str_repeat($x='abcdefghijklmnopqrstuvwxyz', ceil($length/strlen($x)) )),1,$length);
}
