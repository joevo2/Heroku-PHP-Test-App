<!DOCTYPE html>
<html>
	<head>
		<title>CarPool</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<?php include "views/map.php" ?>
	</head>
	<body>
		<!--?php include "views/fblogin.php"; ?-->
		<div class="panel">
			<button class="btn" onclick="location.href='views/admin.php'">Admin Panel</button>
			<!--<button class="button" onclick="location.href='views/feedback.php'">Feedback</button>-->
			<button class="btn" onclick="window.open('views/feedback.php','win2','status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=400,height=400,directories=no,location=no')">
			Feedback</button>
			<button class="btn" onclick="location.href='views/signin.php'">Login</button>
			<button class="btnReg" onclick="location.href='views/signup.php'">Sign Up</button>

		</div>
		<h1>CarPool</h1>
		<h2>Available in HELP University + HELP CAT + University Malaya</h2>
		<!-- Google Map Embed -->
		<div class="col-1">
			<div id="map-canvas"></div>
			<!-- Image placeholder -->
			<!--img src="http://placehold.it/500x500"-->
		</div>
		<div class="col-1">
			<div class="display">
			<h3>Driver Nearby</h3>
				<!--
				<?php
					include "modal/function.php";
					queryDisplay(queryAll($con, $table));
				?>
				-->	
				<?php include "tab.php" ?>
				 <iframe seamless src="tab.php"></iframe> 
			</div>	
		</div>
	</body>
<html>


