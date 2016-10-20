<?php
header('Content-Type: text/plain');

$isTrue = true;
$isTrue = ':]';

if($isTrue) {
    
}
$isfalse = false;
//var_dump(123== "123abc"); // === provjerava i tip podataka (identicno)
//camel case pocinje lowercase; (isPriceCorrect)
$result = $isTrue ? 'one' : 'two';

if($isTrue) {
    $result = 'one';
}
else {
    $result = 'two';
}
//var_dump($result);
//switch case
var_dump(isset($lol));
if(isset($lol) && $lol == 3) {  //ako je prvi false ostale ne provjerava
    
}

//isset(), empty();