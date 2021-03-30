<?php
$dsn = 'mysql:host=localhost;dbname=company';
$username = 'root';
$password = '';
$options = [];

try {
    $connection = new PDO($dsn, $username, $password, $options);
    echo "Connection Successful";
} catch (PDOException $e) {
    echo "Connection Failed";
}
