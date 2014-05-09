<!DOCTYPE html>
<html>
	<head>
		<title>Sign Up</title>
		<link rel="stylesheet" type="text/css" href="../style.css">
		<meta name="viewport" content="initial-scale=1">
		<style type="text/css">
			.btn {
				width: 350px;
				margin: 10px 0px;
			}

		</style>
	</head>
	<body>
		<a href="../index.php"><h1>CarPool</h1></a>
		<div class="box">
			<h2>Sign Up</h2>
			<form action="../controller/signup_con.php" method="post">
				<input class="form" type="text" name="name" placeholder="Name">
				<input class="form" type="text" name="email" placeholder="Email">
				<input class="form" type="password" name="password" placeholder="Password">


				<input type="radio" name="gender" value="Male">Male
				<input type="radio" name="gender" value="Female">Female
				<br><br>
				<input type="checkbox">I agree to to <a href="terms.html">CarPool Terms</a>  <br>
				<div class="submitbox">
				<input class="btn" type="submit" name="signUp" value="Sign Up">
				&nbsp or <a href="signin.php">Sign In
				</div>
			</form>
		</div>
	</body>
</html>
