<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require('../mysqli_connect.php');


$user_id = $_GET['user_id'];

$q = "SELECT * FROM users_tbl WHERE id = $user_id";
$r = mysqli_query($dbc, $q);
$row = mysqli_fetch_assoc($r);


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];



    $q = "UPDATE users_tbl
    SET 
        first_name = '$first_name',
        last_name = '$last_name',
        email = '$email'
    WHERE id=$user_id";

    $r = mysqli_query($dbc, $q);

    if ($r) {
        header('Location: customer.php');
        exit();
    }

}

require ('includes/header.php'); 
?>

<div class='form-container'>
<form method="post">

First Name:
<input type="text" name="first_name"
value="<?php echo $row['first_name']; ?>">

<br><br>

Last Name:
<input type="text" name="last_name"
value="<?php echo $row['last_name']; ?>">

<br><br>

Email:
<input type="text" name="email"
value="<?php echo $row['email']; ?>">

<br><br>

<input type="submit" value="Save">

</form>
</div>




