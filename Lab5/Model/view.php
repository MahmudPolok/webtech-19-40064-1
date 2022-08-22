<?php

include '../controll/header.php';

require_once 'connect.php';

$result = $connection->query("select * from login");

require_once 'delete.php';

$id = 0;
require_once 'update.php';

include '../controll/footer.php';