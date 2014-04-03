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
			<form method="submit" action="">
				<input class="form" type="text" name="email"  placeholder="Email"><br>
				<input class="form" type="password" name="password" placeholder="Password"><br>
				<br>
				<input class="btn" type="submit" value="Sign Up">
			</form>

			<?php
				include "../modal/function.php";

				$table = "carpooler";
				
			?>
		</div>
	</body>
</html>