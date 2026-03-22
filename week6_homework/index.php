<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 6 Homework</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Week 6 Homework Form</h1>

<?php

// define variables and set to empty values
$nameErr = $user_emailErr = $passwordErr = $genderErr = '';
$name = $user_email = $password = $gender = $country = $bio = '';



$interests = [];

function test_input($data) {
    $data = trim($data);
    $data = stripslashes(($data));
    $data = htmlspecialchars(($data));
    return $data;
}

if($_SERVER["REQUEST_METHOD"] == 'POST'){
    // name field
    if (empty($_POST['name'])) {
        $nameErr = 'The name field is required!';
    } else $name = test_input($_POST['name']);
    
    // email field
    if (empty($_POST['user_email'])){
      $user_emailErr = 'The email field is required';
    } else {
      $user_email = test_input(($_POST['user_email']));

      if (filter_var($user_email, FILTER_VALIDATE_EMAIL)){
        $user_emailErr = '✅ valid email';
      } else {
        $user_emailErr = 'Invalid email';
      }
    }

    $password = test_input($_POST['password']);
    
    // gender field
    if (empty($_POST['gender'])) {
      $genderErr = 'You must choose a gender!';
    } else $gender = test_input($_POST['gender']);


    $country = test_input($_POST['country']);
    $bio = test_input($_POST['bio']);

        // loop through each interests value since it is an array
        

//             if (!empty($_POST['interests'])) {
//                 foreach ($_POST['interests'] as $interest) {
//                 $interests[] = test_input($interest);
//             }}
}


?>

<h2>PHP Form Validation</h2>
<form method="POST" action="index.php">

  <!-- TEXT -->

  <label>Name 
  <input type="text" name="name" placeholder="name">
  </label>
  <span class = 'error'><?php echo $nameErr ?></span>
  
  <!-- EMAIL -->
  <label>email:
  <input type="text" name="user_email" placeholder="@email.com" autocomplete='off'>
  </label>
  <span class = 'error'><?php echo $user_emailErr ?></span>
  
  <!-- PASSWORD -->
  <input type="password" name="password" placeholder="Password" autocomplete='off'>

  <!-- Gender Radio Button -->
  <p>Gender:</p>
  <label>
    <input type="radio" name="gender" value="male"> Male
  </label>
  <label>
    <input type="radio" name="gender" value="female"> Female
  </label>
  <label>
    <input type="radio" name="gender" value="other"> Other
  </label>
  <span class = 'error'><?php echo $genderErr ?></span>

  <!-- CHECKBOX (multiple choice) -->
  <p>Interests:</p>
  <label>
    <input type="checkbox" name="interests[]" value="music"> Music
  </label>
  <label>
    <input type="checkbox" name="interests[]" value="sports"> Sports
  </label>

  <!-- SELECT (dropdown) -->
  <select name="country">
    <option value="">Choose country</option>
    <option value="usa">USA</option>
    <option value="canada">Canada</option>
  </select>

  <!-- TEXTAREA -->
  <textarea name="bio" placeholder="Tell us about yourself"></textarea>

  <!-- SUBMIT -->
  <input type="submit" value="Submit">

</form>

<?php
    echo '<h2>Your Input:</h2>';
    echo $name;
    echo '<br>';
    echo $user_email;
    echo '<br>';
    echo $password;
    echo '<br>';
    echo $gender;
    echo '<br>';
    echo $country;
    echo '<br>';
    echo $bio;
    echo '<br>';
    echo implode(', ', $interests);
    echo '<br>';

?>
</body>
</html>


