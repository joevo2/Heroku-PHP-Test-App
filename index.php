<!DOCTYPE html>
<html>
	<head>
		<title>HELP CAT Carpool</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<!--?php include "views/fblogin.php"; ?-->
		<div class="panel">
			<button class="button" onclick="location.href='views/admin.php'">Admin Panel</button>
			<button class="button" onclick="location.href='views/feedback.php'">Feedback</button>
		</div>
		<h1>Carpool Database</h1>
		<!-- Google Map Embed -->
		<div class="col-1">
			<img src="http://placehold.it/500x600&text=Map">
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
					#PHP Function and connection
					include 'function.php';

					#Form insertion
					$name = $address = $sex = "";
					if (isset($_POST['name'])) {
						$name = $_POST['name'];
					}
					if (isset($_POST['address'])) {
						$address = $_POST['address'];
					}
					if (isset($_POST['sex'])) {
						$sex = $_POST['sex'];
					}
					queryInsert($con, "test", array('name', 'address','sex'),array("$name", "$address","$sex"));
					queryDisplay(queryAll($con, "test"));
				?>	
			</div>	
		</div>
	</body>
<html>


