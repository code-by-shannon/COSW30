<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html>

<head>
    <title>List Users</title>
    <style>
        td {
            width: 100px;
        }

        thead {
            font-weight: bold;
        }

        .center {

            text-align: center;

        }
    </style>

</head>

<body>

    <?php

    require('mysqli_connect.php'); // use require because we want to force this to exist before running our queries

    echo "<h1>List of Website Users</h1>";

    //And now to perform a simple query to make sure it's working

    $query = "SELECT * FROM products";

    $result = mysqli_query($connection, $query);
    if (!$result) {
        die("Query failed: " . mysqli_error($connection));
    }

    echo "
<table>
    <thead>
        <td class='center'>ID</td>
        <td>Product Name</td>
        <td>Category</td>
        <td>Created</td>
        <td>Updated</td>
    </thead>"; // open table and include table headings

    while ($row = mysqli_fetch_assoc($result)) {

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['product_id'] . "</td>";
            echo "<td>" . $row['product_name'] . "</td>";
            echo "<td>" . $row['category'] . "</td>";
            echo "<td>" . $row['created_date'] . "</td>";
            echo "<td>" . $row['last_updated'] . "</td>";
            echo "</tr>";
        }}
    echo "</table>"; // close table

    ?>

    <a href='add_user.php'>add new user</a>
    <p>COSW 30</p>

</body>

<?php include('nav.php'); ?>
</html>