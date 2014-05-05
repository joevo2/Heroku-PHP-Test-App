<!DOCTYPE html>
<html>
	<head>
		<title>Sign Up</title>
		<link rel="stylesheet" type="text/css" href="../style.css">
		<style type="text/css">
			form {
				max-width: 300px;
				display: inline-block;
			}
			.form {
				max-width: 300px;
			}
			.btn {
				margin: 10px 0px;
			}
			.signup{
				width: 150px;
				margin: 10px auto;
			}
		</style>
	</head>
	<body>
		<a href="../index.php"><h1>Carpool for HELP CAT</h1></a>
		<div class="box">
			<h3>Sign Up</h3>
			<form action="../controller/signup_con.php" method="post">
				<input class="form" type="text" name="name" placeholder="Name">
				<input class="form" type="text" name="email" placeholder="Email">
				<input class="form" type="password" name="password" placeholder="Password">
				<input type="radio" name="gender" value="Male">Male
				<input type="radio" name="gender" value="Female">Female
				<br><br>
				<input type="checkbox">I agree to to <a href="terms.html">CarPool Terms</a>  <br>
				<div class="signup">
				<input class="btn" type="submit" name="signUp" value="Sign Up">
				&nbsp or <a href="signin.php">Sign In
				</div>
			</form>
		</div>
	</body>
</html>