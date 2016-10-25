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

function getRegionName($area, $offices) {
    $isFound = false;
    foreach ($offices as $reg => $val) {
        foreach ($val as $number => $are) {
            if (in_array($area, $are['area'])) {
                $isFound = true;
                echo 'Naselje'. ' '. $area . ' '. 'nalazi se pod'. ' '. $reg . ' '. 'županija';
                echo "\n";
            }
        }
    }
    if ($isFound) {
        return;
    } else {
        echo "ovo naselje ne postoji";
    }
}

$collator = collator_create('hr_HR');
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
        $postalOfficesByRegion[$zup][$br]['area'][] = $nas;
    } else {
        $postalOfficesByRegion[$zup][$br]['area'][] = $nas;
        collator_sort($collator, $postalOfficesByRegion[$zup][$br]['area']);
    }
    $oldnazpu = $nazpu;
    $oldbrpu = $brpu;
}
/////sortin by name
$price = [];
foreach ($postalOfficesByRegion as $key => $row) {
    foreach ($row as $key1 => $rows) {
        $price[$key1] = $rows['name'];
        //var_dump($rows['name']);
    }
    //var_dump($key);
    //collator_sort($collator, $postalOfficesByRegion[$key]);
    //array_multisort($price, SORT_ASC, SORT_STRING, $postalOfficesByRegion[$key]);
}
//collator_sort($collator, $price);
//array_multisort($price, $postalOfficesByRegion);
//var_dump($postalOfficesByRegion[$key][0]['name']);
//var_dump($postalOfficesByRegion);
getRegionName("Buzin", $postalOfficesByRegion);