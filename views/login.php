<!DOCTYPE html>
<html>
	<head>
		<style type="text/css">
			html {
				width: 85%;
				margin: 0 auto;
			}
		</style>
	</head>
	<body>
		<div>
			<a href="/../index.php"><h1>Carpool for HELP CAT</h1></a>
			<h3>Login</h3>
			<form method="submit" action="">
				Email<input type="text" name="email"><br>
				Password<input type="text" name="password"><br>
				<input type="submit" value="Login">
			</form>
			<?php
				include "../function.php";

				$table = "carpooler";
				  
			?>
		</div>
	</body>
</html>