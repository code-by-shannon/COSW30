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
$name = $email = $password = $gender = $country = $bio = '';
$interests = [];

?>

<h2>PHP Form Validation</h2>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">

  <!-- TEXT -->
  <label>Name
  <input type="text" name="name" placeholder="name">
  </label>
  
  <!-- EMAIL -->
  <label>email:
  <input type="email" name="email" placeholder="@email.com" autocomplete='off'>
  </label>
  
  <!-- PASSWORD -->
  <input type="password" name="password" placeholder="Password" autocomplete='off'>

  <!-- RADIO (single choice) -->
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
</body>
</html>
