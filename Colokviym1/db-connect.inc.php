<?php

$host = 'localhost';
$db   = 'shop';
$user = 'shop';    
$pass = 'amazingparol';
$charset = 'utf8mb4';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=$charset", $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ]);
}
catch (PDOException $e) {
    echo 'A problem occured with the database connection...';
    die();
}

