<?php # Script 12.12 - login.php #4
// This page processes the login form submission.
// The script now stores the HTTP_USER_AGENT value for added security.

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Check if the form has been submitted:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	// Need two helper files:
	require('includes/login_functions.inc.php');
	require('../mysqli_connect.php');

	// Check the login:
	list ($check, $data) = check_login($dbc, $_POST['email'], $_POST['pass']);



	if ($check) {

		session_start();
	
		$_SESSION['user_id'] = $data['id'];
		$_SESSION['first_name'] = $data['first_name'];
		$_SESSION['role'] = $data['role'];
	
		$_SESSION['agent'] = sha1($_SERVER['HTTP_USER_AGENT']);
	
		header("Location: loggedin.php");
		exit();
	
	} else { // Unsuccessful!
	
		$errors = $data;
	
	}

	mysqli_close($dbc); // Close the database connection.

} // End of the main submit conditional.

// Create the page:
include('includes/login_page.inc.php');
?>