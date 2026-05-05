<?php

//Connect to the database
$host = "localhost";
$user = "unjj3uy3higxt";
$pass = "*b12V#H2h@#e";
$db = "dbex0eratr3fob"; 
$port = 3306; 

// Try to make a database connection
ini_set('display_errors', '1');
$connection = mysqli_connect($host, $user, $pass, $db, $port); // Catch any connection errors
if(mysqli_connect_errno()) {
die("Database connection failed: " .
mysqli_connect_error() .
" (" .mysqli_connect_errno() . ")"
);
}
else {
echo "connection made";
}



// If no errors, you can proceed with your sql queries

?>
