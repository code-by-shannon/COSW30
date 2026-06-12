<?php

$user_menu = match($_SESSION['role'] ?? '') {
    'admin'    => 'menu-admin.php',
    'employee' => 'menu-employee.php',
    'customer' => 'menu-customer.php',
    default    => '',
};
?>

<?php
if (isset($_SESSION['first_name'])) {
    echo '<p class="current_user">You are currently logged in as: ' .
         $_SESSION['first_name'] .
         ' (' .
         $_SESSION['role'] .
         ')</p>';
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $page_title; ?></title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="css/sticky-footer-navbar.css" rel="stylesheet">
</head>

<body>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Your Website</a>
        </div>

        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Home</a></li>
                <?php if ($user_menu) include $user_menu; ?>
                <li>
                    <?php
                    if (isset($_SESSION['user_id'])) {
                        echo '<a href="logout.php">Logout</a>';
                    } else {
                        echo '<a href="login.php">Login</a>';
                    }
                    ?>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
<!-- Script 12.10 - header.php -->