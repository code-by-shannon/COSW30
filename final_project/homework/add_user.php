<?php

require('../mysqli_connect.php');


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    $status = $_POST['status'];

    $q = "INSERT INTO users_tbl
          (first_name, last_name, email, password, role, status)
          VALUES
          ('$first_name', '$last_name', '$email', '$password', '$role', '$status')";

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
    <input type="text" name="first_name">
    <br><br>

    Last Name:
    <input type="text" name="last_name">
    <br><br>

    Email:
    <input type="text" name="email">
    <br><br>

    Password:
    <input type="text" name="password">
    <br><br>

    Role:
    <input type="text" name="role">
    <br><br>

    Status:
    <input type="text" name="status">
    <br><br>

    <input type="submit" value="Add User">

</form>
</div>