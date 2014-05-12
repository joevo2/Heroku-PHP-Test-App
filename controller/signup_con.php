<?php
	require "../modal/function.php";

	session_start();
	$_SESSION['err']  = "";

	function newUser() {
		//Form validation
		if(empty($_POST['name']) || empty($_POST['email'])
		|| empty($_POST['password']) || empty($_POST['gender'])
		|| empty($_POST['agree'])) {
				$_SESSION['err'] = "Form Incomplete";

				return "Form incomplete";
		} else {
			$table = "users";
			$name = $_POST['name'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$gender = $_POST['gender'];

			$result = queryInsert($table,
				array('name','email','password','gender'),
				array($name, $email, $password, $gender));
			if ($result) {
				return "<h3>Thank You! For Signing Up</h3>";
			}
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
		header("Location: ../views/thanks.php");
		exit;
	}
?>
