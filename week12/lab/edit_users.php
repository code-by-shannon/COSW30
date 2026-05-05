<?php error_reporting(E_ALL);
      ini_set('display_errors', 1);
      ini_set('display_startup_errors', 1);

      $user_id = $_GET['user_id'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Users</title>
    <style>
        td {width: 100px;}
        thead {font-weight: bold;}
        .center {text-align: center;}
    </style>
</head>

<body>
<?php
    require('mysqli_connect.php');

    echo "<h1>Edit User</h1>";

    $query = "SELECT * FROM users_tbl WHERE users_tbl.id = $user_id";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($result);
?>


    <form action='#' method='post'>
        <p>
            <label for="id">User ID: </label><br>
            <input type = 'text' name='id' value="<?php echo $row['id']; ?>" readonly>
        </p>
        
        <p>
            <label for="first_name">First Name: </label><br>
            <input type = 'text' name='first_name' value="<?php echo $row['first_name']; ?>">
        </p>

        <p>
            <label for="last_name">Last Name: </label><br>
            <input type = 'text' name='last_name' value="<?php echo $row['last_name']; ?>">
        </p>

        <p>
            <label for="email">email: </label><br>
            <input type = 'text' name='email' value="<?php echo $row['email']; ?>">
        </p>

        <p>
            <label for="status">
                Status: <?php echo ($row['status'] === 'A') ? '🟢' : '🔴'; ?> </label><br>
            <select name="status">
                <option value="A" <?php if ($row['status'] === 'A') echo 'selected'; ?>>Active</option>
                <option value="I" <?php if ($row['status'] === 'I') echo 'selected'; ?>>Inactive</option>
            </select>
        </p>
    </form>

    
    <p>COSW 30</p>
</body>
</html>