<?php
header('Content-Type: text/plain');

$n =1;
$f = 2.55;

//var_dump($n + $f);

$b = true;

//var_dump($n + $f + $b);

$n += 10;
$n *= 10;

$s = 'php akademija';
$s = $s . 'u osijeku';
//var_dump($s);

$a = [
    0 => 1,
    1 => 2,
    'one' => 'a1',
    'two' => 'a2'
];

$b = [
    0 => 2,
    1 => 3,
    'two' => 'b2',
    'three' => 'b3'
];
        
var_dump($a + $b);
var_dump(array_merge($a, $b));
var_dump(array_replace($a, $b));