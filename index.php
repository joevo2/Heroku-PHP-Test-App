<!DOCTYPE html>
<html>
	<head>
		<title>Carpool for HELP CAT</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<!--?php include "views/map.php" ?-->
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
			<div id="map-canvas"></div>
			<!-- Image placeholder -->
			<img src="http://placehold.it/500x500">
		</div>
		<div class="col-1">
			<div>
				<?php include "views/form.php" ?>
			</div>
			<div class="display">
				<?php
					queryDisplay(queryAll($con, $table));
				?>	
			</div>	
			<h3>Driver Nearby</h3>
		</div>
	</body>
<html>


