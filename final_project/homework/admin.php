<?php

$page_title = "Admin Page";

session_start();

if (
    !isset($_SESSION['agent']) ||
    $_SESSION['agent'] != sha1($_SERVER['HTTP_USER_AGENT']) ||
    !in_array($_SESSION['role'], ['admin', 'employee'])
) {
    include('includes/login_functions.inc.php');
    redirect_user();
}

include('includes/header.php');


echo '<h1>Admin Dashboard</h1>';

echo '<p class="welcome">Welcome, ' . $_SESSION['first_name'] . '</p>';

echo "<p class='admin_p'>This administrative dashboard provides access to the system's management features. Administrators can view and manage user accounts, customer records, product listings, and order information through the navigation menu above.</p>";

include('includes/footer.php');

?>