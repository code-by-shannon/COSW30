<?php

require('../mysqli_connect.php');
require('includes/header.php');

$user_id = $_GET['user_id'];

$q = "SELECT * FROM users_tbl WHERE id = $user_id";
$r = mysqli_query($dbc, $q);

$row = mysqli_fetch_assoc($r);

echo '<h1>User Details</h1>';
echo '<table border="1">';

echo '<tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Status</th>
        <th>Role</th>
        <th>Email</th>
        <th>User Image</th>
      </tr>';

echo '<tr>';

echo '<td>' . $row['id'] . '</td>';
echo '<td>' . $row['first_name'] . '</td>';
echo '<td>' . $row['last_name'] . '</td>';
echo '<td>' . $row['status'] . '</td>';
echo '<td>' . $row['role'] . '</td>';
echo '<td>' . $row['email'] . '</td>';
echo '<td>' . $row['user_image'] . '</td>';

echo '</tr>';

echo '</table>';

echo '<a href="customer.php" class="btn">Return to Customer List</a>';

?>