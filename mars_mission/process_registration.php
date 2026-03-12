<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Registration Confirmation Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
</head>
<body class = 'trip_confirm_page'>
    
<?php
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$age_range = $_POST['age_range'];
$family_status = $_POST['family_status'];
$reason = $_POST['reason'];
$terms = $_POST['terms'];


// Check all inputs for data.  If any field is empty, exit program

if (
    empty($first_name) ||
    empty($last_name) ||
    empty($email) ||
    empty($phone) ||
    empty($age_range) ||
    empty($family_status) ||
    empty($reason) ||
    empty($terms)
) {
    die("<div class = 'error'>Oops! Please complete all required fields before submitting the form.</div>");
}  else { 
    ?>
    
        <div id = 'confirmation'>
            <h2>Dear <?php echo "$first_name:" ?> </h2><br>  Your form has been properly submitted and is up for review.  We have received the following information:
                <ul>
                <li>Name: <?php echo "$first_name $last_name"?></li>
                <li>Email: <?php echo $email?></li>
                <li>Phone: <?php echo $phone?></li>
                <li>Age Range: <?php echo $age_range?></li>
                <li>Family Status: <?php echo $family_status?></li>
                <li>Reason for request: <?php echo $reason?></li>
                </ul>
                
        </div>
    <?php    
    }
    ?>








<div class = 'trivia'>
    <button id = 'button'>Mars Fact</button>
    <p id='fun_fact'></p>
</div>



<script src='main.js'></script>
</body>
</html>

