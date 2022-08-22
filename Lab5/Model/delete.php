<?php

if (isset($_GET['delete'])) {

    require_once 'connect.php';

    $id = $_GET['delete'];

    $stmt = $connection->prepare("DELETE FROM `login` WHERE id=$id");

    $stmt->execute();
    $stmt->close();
}