<?php
header('Content-Type: text/plain');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$inventory = array(

   array("type"=>"fruit", "price"=>3.50),
   array("type"=>"milk", "price"=>2.90),
   array("type"=>"pork", "price"=>5.43),

);

$price = array();
foreach ($inventory as $key => $row)
{
    $price[$key] = $row['price'];
}
array_multisort($price, SORT_DESC, $inventory);

var_dump($price);
