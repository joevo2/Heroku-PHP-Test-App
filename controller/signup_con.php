<?php
	require "../modal/function.php";

	function newUser() {
		$table = "users";
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$gender = $_POST['gender'];
		$result = queryInsert($table,
			array('name','email','password','gender'),
			array($name, $email, $password, $gender));
		if ($result) {
			$response = "<h3>Thank You! For Signing Up</h3>";
		}
	}

	function signUp() {
		$table = "users";
		$response = "Hello";
		if (!empty($_POST['email'])) {
			$query = pg_query("SELECT * FROM $table WHERE email = '$_POST[email]'") or die(pg_last_error());
			if (!$row = pg_fetch_array($query) or die(pg_last_error())) {
				newUser();
			} else {
				$response = "<h3>Email has been registered</h3>";
			}
		}
		return $response;
	}

	if (isset($_POST['signUp'])) {
		$response = signUp();
		header("Location: ../views/thanks.php");
	}

?>
