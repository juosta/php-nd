<?php

$host = '127.0.0.1';
$port='3307';
$db   = 'newdb';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;port=$port;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

$pdo = new PDO($dsn, $user, $pass, $options);

// try {
//     $conn = new PDO('mysql:host=localhost;port=3307;dbname=newdb', "root", "");
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// } catch(PDOException $e) {
//     echo 'ERROR: ' . $e->getMessage();
// }

// INSERT INTO table_name (column1, column2, column3,...)
// VALUES (value1, value2, value3,...)

$sql = "INSERT INTO users (name, surname, account_no, personal_no)
VALUES ('Meta','Meskinija','LT77 5545 9004 0746 9949','51608078514')";


$pdo->query($sql);


$sql = "SELECT id, name, surname, account_no, personal_no, balance FROM users";
$stmt = $pdo->query($sql); //DB steitmentas
while ($row = $stmt->fetch()) // duoda viena eilute
{
    echo $row['id']. ' ' .$row['name']. ' ' .$row['surname']. ' ' .$row['account_no']. ' ' .$row['personal_no'] . ' ' .$row['balance'] . '<br>';
}