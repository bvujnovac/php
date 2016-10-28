<?php
header('Content-Type: text/plain');
//comment
#comment
/*
 * comment
 */
$v = 42;

//echo $v;
//die();
//var_dump($v);
$n = 1;
$f = 2.55;

//var_dump($n);
//var_dump($f);

$s = 'PHP akademija $n';
//echo $s;
$s1 = "PHP akademija $n";   //string cita //kod /n
//echo $s1;
//var_dump($s);
$a1 =[1, 2, 3]; //ucit ovak
//var_dump($a1);
//echo $a1[2];
$a1[3] = 4;
$a1[] = 5;
$a1[] = 6;
//var_dump($a1);
//objekt
$o = new stdClass();
$o->x = 'just a property';

var_dump($o);