<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../style.css">
	</head>
	<body>
		<h1>Feedback</h1>
		<form action="" method="post">
			<input type="text" name="email" placeholder="Email">
			<br>
			<textarea cols='40' rows='15' placeholder="Feedback" name="feedback"></textarea>
			<br>
			<input type="submit" name="feedbackSubmit" value="Send">
		</form>
		<?php
			include "../modal/function.php";

			#Form insertion
			$email = $feedback = "";
			if (isset($_POST['email'])) {
				$email = $_POST['email'];
			}
			if (isset($_POST['feedback'])) {
				$feedback = $_POST['feedback'];
			}
			queryInsert("feedback", array('email', 'feedback'),array($email, $feedback));
			if (isset($_POST['feedbackSubmit'])) {
				echo "<script>window.close();</script>";
			}
		?>
	</body>
</html>