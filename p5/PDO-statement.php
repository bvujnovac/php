<?php

header('Content-Type: text/plain');

$dsn = 'mysql:host=localhost;dbname=p5;charset=utf8';
$username = 'root';
$password = '';

try {
    $conn = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    exit;
}
/*
  $id = 3;  //user input kojem ne vjerujemo xD $_GET['id']    %20%OR
  $sql = 'SELECT * FROM `attendee` WHERE id = ?';
  //get statement from connection

  $stmt = $conn->prepare($sql);
  $stmt->execute([$id]);


  foreach ($stmt as $row) {
  print $row['id'] . "\t";
  print $row['name'] . "\t";
  print $row['email'] . "\t";
  }
 */

$id = 3;  //user input kojem ne vjerujemo xD $_GET['id']    %20%OR
$sql = 'SELECT * FROM `attendee` WHERE id = :id';
//get statement from connection

$stmt = $conn->prepare($sql);
$stmt->execute(['id' => $id]);


foreach ($stmt as $row) {
    print $row['id'] . "\t";
    print $row['name'] . "\t";
    print $row['email'] . "\t";
}