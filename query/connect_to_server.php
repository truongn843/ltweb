<?php

$serverName = 'localhost';
$userName = 'root';
$password = '';
$dbName = 'db_assignment_web';
$db = mysqli_connect($serverName, $userName, $password, $dbName)
    or die('MySQL connect failed. ' . mysqli_connect_error());
