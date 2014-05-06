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
			<?php
				require '../controller/signup_con.php';
				echo $response;
			?>
		</div>
		<!--script type="text/javascript">
			setTimeout(function () {
			   window.location.href= '../index.php'; // the redirect goes here

			},5000);
		</script-->
	</body>
</html>