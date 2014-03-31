<!DOCTYPE html>
<html>
	<head>
		<title>Carpool for HELP CAT</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<!--?php include "views/fblogin.php"; ?-->
		<div class="panel">
			<button class="btn" onclick="location.href='views/admin.php'">Admin Panel</button>
			<!--<button class="button" onclick="location.href='views/feedback.php'">Feedback</button>-->
			<button class="btn" onclick="window.open('views/feedback.php','win2','status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=400,height=400,directories=no,location=no')">
			Feedback</button>
			<button class="btn" onclick="location.href='views/login.php'">Login</button>
			<button class="btnReg" onclick="location.href='views/reg.php'">Sign Up</button>

		</div>
		<h1>Carpool for HELP CAT</h1>
		<!-- Google Map Embed -->
		<div class="col-1">
			<img src="http://placehold.it/600x700&text=Map">
		</div>
		<div class="col-1">
			<div>
				<?php include "form.php" ?>
			</div>
			<div class="display">
				<?php
					queryDisplay(queryAll($con, $table));
				?>	
			</div>	
		</div>
	</body>
<html>


