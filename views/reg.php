<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../style.css">
		<style type="text/css">
			div.box {
				margin-left: auto;
			    margin-right: auto;
			    border: 1px solid purple;
			    padding: 10px;
			    width: 100%;
			    max-width: 400px;
			}

			input.btn {
				font-size: 15px;
				border-radius:5px;
				border: none;
				padding: 10px;
				background-color: purple;
				color: white;
				//For Centering things
				display: block;
			    margin-left: auto;
			    margin-right: auto
			}
		</style>
	</head>
	<body>
		<a href="../index.php"><h1>Carpool for HELP CAT</h1></a>
		<div class="box">
			<h3>Sign Up</h3>
			<form method="submit" action="">
				Email<input type="text" name="email"><br>
				Password<input type="text" name="password"><br>
				Re-enter Password<input type="text" name="password2"><br>
				<br>
				<input class="btn" type="submit" value="Sign Up">
			</form>

			<?php
				include "../function.php";

				$table = "carpooler";
				
				  
			?>
		</div>
	</body>
</html>