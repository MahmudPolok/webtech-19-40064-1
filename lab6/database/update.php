<?php

if (isset($_GET['edit'])) {

    //require_once 'connect.php';

    $id = $_GET['edit'];

    $stmt = $connection->query("select * from login where id=$id");

    if (count($stmt) == 1){
        $row = $stmt->fetch_array();
        $username = $row['username'];
        $password = $row['password'];
    }

    if (isset($_POST['update'])) {
        
        $id = $_POST['id'];

        $username = $_POST['username'];
        $password = $_POST['password'];

        $connection->query("UPDATE `login` SET username='$username', `password`='$password' WHERE id=$id");
    }
}