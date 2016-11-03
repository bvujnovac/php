<?php

header('Content-Type: text/plain');

//if(isset($_GET['id']))

$dsn = 'mysql:host=localhost;dbname=p5;charset=utf8';
$username = 'root';
$password = '';

try {
    $conn = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    exit;
}

$sql = 'SELECT * FROM `attendee` WHERE id = ' . $_GET['id'];
echo ' SQL: ' . $sql . PHP_EOL . PHP_EOL;
//get statement from connection
$stmt = $conn->query($sql);

echo 'Result: ';
print_r($stmt->fetchAll());
//ne sanirani user input na stranici, sql injection, utjecaj na bazu