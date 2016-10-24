<?php

header('Content-Type: text/plain');

/**
 * a) Parse csv file 08-tasks/postanski-uredi.csv to array as shown below
 * b) Group postal offices by region (second array)
 * c) Create function getRegionName($area) that resolves region name for 
 * specific area
 * d) Sort region, city and areas alphabetically
 */
/* $postalOfficesByRegion = [
  'Osječko-baranjska' => [
  [
  'name' => 'Osijek',
  'zip' => '31000',
  'area' => [
  'Brijest',
  'Briješće',
  //..
  ]
  ],
  //..
  ],
  //..
  ]; */
$area = 'Breza';

function getRegionName($area) {
    foreach ($postalOfficesByRegion as $reg => $val) {
        var_dump($val);
    }
}

$file = 'postanski-uredi.csv'; //file to access
$csv1 = array_map('str_getcsv', file($file)); //maping csv to array

array_walk($csv1, function(&$a) use ($csv1) {
    $a = array_combine($csv1[0], $a); //going through elements and combining header (keys) with elements (not first array)
});

array_shift($csv1); # removing column header

$oldnazpu = ''; //empty variables for checking changes
$oldbrpu = '';
$br = 0;
foreach ($csv1 as $key => $value) { #accesing array
    $zup = $value['zupanija']; //getting value by key
    $nazpu = $value['nazivPu'];
    $brpu = $value['brojPu'];
    $nas = $value['naselje'];

    if ($oldnazpu !== $nazpu || $oldbrpu !== $brpu) {
        $br++;
        $b = [];
        $b['name'] = $nazpu;
        $b['zip'] = $brpu;
        $postalOfficesByRegion[$zup][$br] = $b;
    } else {
        $postalOfficesByRegion[$zup][$br]['area'][] = $nas;
    }
    $oldnazpu = $nazpu;
    $oldbrpu = $brpu;
}
ksort($postalOfficesByRegion);

foreach ($postalOfficesByRegion as $reg => $val) {
    foreach ($val as $number => $are) {
        if (in_array($area, $are['area'])) {
            echo "breza je nadena";
        }
    }
}