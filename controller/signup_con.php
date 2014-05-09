<?php
	require "../modal/function.php";

	session_start();

	function newUser() {
		$table = "users";
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$gender = $_POST['gender'];

		//Form validation
		


		$result = queryInsert($table,
			array('name','email','password','gender'),
			array($name, $email, $password, $gender));
		if ($result) {
			return "<h3>Thank You! For Signing Up</h3>";
		}
	}

	function signUp() {
		$table = "users";
		$response = "";
		if (!empty($_POST['email'])) {
			$query = pg_query("SELECT * FROM $table WHERE email = '$_POST[email]'") or die(pg_last_error());
			if (!$row = pg_fetch_array($query)) {
				$response = newUser();
			} else {
				$response = "<h3>Sign Up failed: The Email has been registered previously</h3>";
			}
		}
		return $response;
	}

	if (isset($_POST['signUp'])) {
		$_SESSION['response'] = signUp();
		//echo $response;
		header("Location: ../views/thanks.php");
		exit;
	}

?>
