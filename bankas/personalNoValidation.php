<?php 
foreach($users as $user){
    if($_POST['personalNo'] == $user['personalNo']){
        $error = true;
        setMessage("Vartotojas su tokiu asmens kodu jau egzistuoja.", "danger");
        break;
    }
}


$firstChar = substr($_POST['personalNo'], 0,1);
$yearChar = substr($_POST['personalNo'], 1,2);
if($yearChar <= substr(date("Y"),2,2)) {
    $year = "20$yearChar";
} else {
    $year = "19$yearChar";
}
_d($firstChar,"pirmas sk");
_d($yearChar,"metu sk");
_d($year,"metai");
$monthChar = substr($_POST['personalNo'], 3,2);
$dayChar = substr($_POST['personalNo'], 5,2);

_d($monthChar,"menesio sk");
_d($dayChar,"dienos sk");
_d(checkdate($monthChar, $dayChar, $year),"datos tikrinimas");
if (isset($_POST['personalNo']) && (strlen($_POST['personalNo']) != 11 || strlen($personal) != 11)) {
    setMessage("Neteisingas asmens kodas, ilgis","danger");
    $error = true;
} elseif(!preg_match('/[1234569]/', $firstChar)){ // jei prasideda 9, visi like skaiciai gali buti bet kokie

    setMessage("Neteisingas asmens kodas, pirmas simbolis","danger");
    $error = true;
} 

if(preg_match('/[123456]/', $firstChar)) {
    if(!checkdate($monthChar, $dayChar, $year) && ($monthChar != "00" || $monthChar != "00")) { // data- menuo ir diena (gali buti nuliai)
        setMessage("Neteisingas asmens kodas, data","danger");
        $error = true;
    }
}

