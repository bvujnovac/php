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

$sql = 'SELECT * FROM `attendee`';
//get statement from connection
$stmt = $conn->query($sql);

//gets you row one by one
/*
  while ($row = $stmt->fetch()) {
  print $row['id'] . "\t";
  print $row['name'] . "\t";
  print $row['email'] . "\t";
  }
 */
//fetch all rows as array at once
/*
  foreach ($stmt->fetchAll() as $row) {
  print $row['id'] . "\t";
  print $row['name'] . "\t";
  print $row['email'] . "\t";
  }
 */
//also possible
foreach ($stmt as $row) {
    print $row['id'] . "\t";
    print $row['name'] . "\t";
    print $row['email'] . "\t";
}
