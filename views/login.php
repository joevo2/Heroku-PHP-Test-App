<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../style.css">
		<style type="text/css">
			div.box {
				margin-left: auto;
			    margin-right: auto;
			    padding: 10px;
			    width: 100%;
			    max-width: 300px;
			}

			input.btn {
				font-size: 15px;
				border-radius:5px;
				border: none;
				padding: 10px;
				background-color: purple;
				color: white;
			}
		</style>
	</head>
	<body>
		<a href="../index.php"><h1>Carpool for HELP CAT</h1></a>
		<div class="box">
			<h3>Sign In</h3>
			<form method="submit" action="">
				<input class="form" type="text" name="email"  placeholder="Email"><br>
				<input class="form" type="text" name="password" placeholder="Password"><br>
				<br>
				<input class="btn" type="submit" value="Login">
			</form>

			<?php
				include "../function.php";

				$table = "carpooler";
				
				  
			?>
		</div>
	</body>
</html>