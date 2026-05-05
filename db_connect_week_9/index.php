<?php

$host = 'localhost';
$db   = 'dbex0eratr3fob';
$user = 'unjj3uy3higxt';
$pass = '{7$r2&j`unn$';

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully!";

?>