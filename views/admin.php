<!DOCTYPE html>
<html>
	<head>
		<title>CP Admin Panel</title>
		<link rel="stylesheet" type="text/css" href="../style.css">
		<meta name="viewport" content="width=device-width, user-scalable=no">
	</head>
	<body>
		<a href="../index.php"><h1>Carpool for HELP CAT</h1></a>
		<h2>Admin Panel</h2>
		<h3>Feedback</h3>
		<form action="" method="post">
			<input type="number" name="numRow">
			<input type="submit" value="Submit">
		</form>
		<?php 
			require '../modal/function.php';
			$table = "feedback";
			if (isset($_POST['numRow'])) {
				$numRow = $_POST['numRow'];
			} else {
				$numRow = 5;
			}
			queryDisplay(queryAll($table),$numRow);
		?>
	</body>
</html>