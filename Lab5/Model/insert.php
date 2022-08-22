<?php

$username = $_POST['username'];
$password = $_POST['password'];

require 'connect.php';

header("Location: ../main.php?insert=Done");
$connection->close();