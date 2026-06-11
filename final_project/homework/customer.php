<?php

session_start(); // Start the session.

// If no session value is present, redirect the user:
// Also validate the HTTP_USER_AGENT!
if (!isset($_SESSION['agent']) OR ($_SESSION['agent'] != sha1($_SERVER['HTTP_USER_AGENT']) )) {

	// Need the functions:
	require('includes/login_functions.inc.php');
	redirect_user();

}

echo '<div class="customer-header">';
echo '<h1>Customer Management</h1>';
echo '<a href="add_user.php" class="btn">Add User</a>';
echo '</div>';

$page_title = 'List Users';
require ('includes/header.php'); 

    echo "<h1>Customer List</h1>";
    require('../mysqli_connect.php');

    $user_role = $_SESSION['role'];
    $user_id = $_SESSION['user_id'];

    if ($user_role == 'admin' || $user_role == 'employee') {

        $query = "SELECT * FROM users_tbl";
    
    } else {
    
        $query = "SELECT * FROM users_tbl
                  WHERE id = $user_id";
    }
    

    $result = mysqli_query($dbc, $query);
    
    
    if (!$result) {
        die("Query failed: " . mysqli_error($connection));
    }

    echo "
<table>
    <thead>
        <td class='center'>Profile Image</td>
        <td class='center'>ID</td>
        <td>FirstName</td>
        <td>Last Name</td>
        <td>Email Address</td>
        <td>Role</td>
        <td>Status</td>
        <td>Action</td>
    </thead>"; // open table and include table headings

    while ($row = mysqli_fetch_assoc($result)) {

        echo "<tr>";
    
        echo "<td class='center'><img class='user_image_small' src='uploads/" . $row['user_image'] . "'></td>";
        echo "<td class='center'>" . $row['id'] . "</td>";
        echo "<td class='center'>" . $row['first_name'] . "</td>";
        echo "<td class='center'>" . $row['last_name'] . "</td>";
        echo "<td class='center'>" . $row['email'] . "</td>";
        echo "<td class='center'>" . $row['role'] . "</td>";
        echo "<td class='center'>" . $row['status'] . "</td>";
    
        echo "<td class='center'>";
    
        if ($_SESSION['role'] == 'admin') {
            echo "<a href='edit_user.php?user_id=" . $row['id'] . "'>Edit</a> ";
        }
    
        echo "<a href='view_user.php?user_id=" . $row['id'] . "'>View</a>";
    
        echo "</td>";
    
        echo "</tr>";
    }
    echo "</table>"; // close table
    
    require('includes/footer.php');

?>
    

</html>