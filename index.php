<!DOCTYPE html>
<html>
	<head>
		<title>Carpool for HELP CAT</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<!--?php include "views/fblogin.php"; ?-->
		<div class="panel">
			<button class="button" onclick="location.href='views/admin.php'">Admin Panel</button>
			<!--<button class="button" onclick="location.href='views/feedback.php'">Feedback</button>-->
			<button class="button" onclick="window.open('views/feedback.php','win2','status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=400,height=400,directories=no,location=no')">
			Feedback</button>
		</div>
		<h1>Carpool for HELP CAT</h1>
		<!-- Google Map Embed -->
		<div class="col-1">
			<img src="http://placehold.it/600x700&text=Map">

			<!--
			<iframe class="mapbox" 
			  width="500"
			  height="500"
			  frameborder="0" style="border:0"
			  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDsA-rWJVhqWo5XhCH3f6eOwjQol2hyCCc
			    &q=HELP+College+of+Arts+and+Technology">
			</iframe>
			-->

		</div>
		<div class="col-1">
			<div class="form">
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


