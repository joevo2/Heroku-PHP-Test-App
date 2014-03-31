<!DOCTYPE html>
<html>
	<head>
		<title>CP Admin Panel</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<style type="text/css">
			html {
				width: 85%;
				margin: 0 auto;
			}
		</style>
	</head>
	<body>
		<a href="/../index.php"><h1>Carpool for HELP CAT</h1></a>
		<h2>Admin Panel</h2>
		<h3>Feedback</h3>
		<?php 
			include "../function.php";
			$table = "feedback";

			queryDisplay(queryAll($con, $table));
		?>
	</body>
</html>