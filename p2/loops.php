<?php
header('Content-Type: text/plain');

$list = [
    '<a>    -   anchor',
    '<p>    -   paragraph',
    'ul -   unorderd list',
    '<table>    -   table'
];

foreach ($list as $value) {
    $exploded = explode(" - ", $value); //trimm, explode, special chars   
    $newarray = array_map('trim', $exploded);
    var_dump($newarray);
    //echo $newarray;
}