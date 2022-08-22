<?php

$servername = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'test';

$connection = new mysqli($servername, $user, $pass, $dbname);

if ($connection->connect_error) {
    die("Connection Failed" . $connection->connect_error);
} else {
    $stmt = $connection->prepare("insert into login(username, password) values(?, ?)");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $stmt->close();
}