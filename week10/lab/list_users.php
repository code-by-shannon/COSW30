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

    echo "<h1>List of Website Users Week 12</h1>";

    //And now to perform a simple query to make sure it's working

    $query = "SELECT * FROM users_tbl";

    $result = mysqli_query($connection, $query);
    if (!$result) {
        die("Query failed: " . mysqli_error($connection));
    }

    echo "
<table>
    <thead>
        <td class='center'>ID</td>
        <td>FirstName</td>
        <td>Last Name</td>
        <td>Email Address</td>
        <td>Role</td>
    </thead>"; // open table and include table headings

    while ($row = mysqli_fetch_assoc($result)) {

        echo "<tr>
        <td class='center'>" . $row['id'] . "</td>
        <td class='center'>" . $row['first_name'] . "</td>
        <td class='center'>" . $row['last_name'] . "</td>
        <td class='center'>" . $row['email'] . "</td>
        <td class='center'>" . $row['role'] . "</td>
      </tr>";
    }
    echo "</table>"; // close table

    ?>

    <a href='add_user.php'>add new user</a>
    <p>COSW 30</p>

</body>

</html>