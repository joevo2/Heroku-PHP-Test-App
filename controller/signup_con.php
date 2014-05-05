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
			echo "Registration Succesful";
		}	
	}	

	if (isset($_POST['signUp'])) {
		newUser();
		header("Location: ../views/thanks.html");
	}

	function signUp() {
		if (isset($_POST['email'])) {
			$query = pg_query("SELECT * FROM $table WHERE email = '$_POST[email]' 
				AND '$_POST[password]'") or die(pg_last_error());
		}
	}


?>