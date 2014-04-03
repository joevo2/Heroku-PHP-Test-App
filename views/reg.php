<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../style.css">
		<style type="text/css">
			
		</style>
	</head>
	<body>
		<a href="../index.php"><h1>Carpool for HELP CAT</h1></a>
		<div class="box">
			<h3>Sign Up</h3>
			<form method="post" action="">
				<input class="form" type="text" name="email"  placeholder="Email"><br>
				<input class="form" type="password" name="password" placeholder="Password"><br>
				<br>
				<input class="btn" type="submit" name="signUp" value="Sign Up">
			</form>

			<?php
				include "../modal/function.php";

				$table = "carpooler";
				if (isset($_POST['signUp'])) {
					header("Location: thanks.html");
			}
				
			?>
		</div>
	</body>
</html>