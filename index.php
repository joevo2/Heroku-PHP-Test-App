<!DOCTYPE html>
<html>
	<head>
		<title>CarPool</title>
		<meta name="viewport" content="initial-scale=1">
		<link rel="stylesheet" type="text/css" href="style.css">
		<?php include "views/map.php" ?>
		<style>
			.form {
				max-width: 200px;
				margin: 10px;
			}
		</style>
	</head>
	<body>
		<div class="panel">
			<button class="btn" onclick="location.href='views/admin.php'">Admin Panel</button>
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
		</div>
		<div class="col-1">
			<div class="display">
				<?php
					//if($_SESSION) {
						echo "<form>"
						. "To and from "
						. "<select>"
						. "<option value='HELP CAT'>HELP CAT</option>"
						. "<option value='HELP U'>HELP U</option>"
						. "<option value='UM'>UM</option>"
						. "</select><br>"
						. "Availability:"
						. "<input type='checkbox'>Mon"
						. "<input type='checkbox'>Tue"
						. "<input type='checkbox'>Wed"
						. "<input type='checkbox'>Thu"
						. "<input type='checkbox'>Fri"
						. "<input type='checkbox'>Sat<br>"
						. "Time: "
						. "<input class='form' type='time'>"
						. "<input class='btn' type='submit' value='OFFER RIDE'>"
						. "</form>";
					//}
				?>
				<h3>Driver Nearby</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ullamcorper faucibus diam, id viverra leo malesuada id. Mauris quis cursus justo. Nam auctor diam a odio ultrices, vel adipiscing dolor tempus. Nulla id semper nunc. Nam quis enim in erat feugiat ultrices vel et nulla. Vestibulum eleifend turpis ac magna tincidunt tincidunt. Maecenas varius porttitor leo, eu lacinia nisi consequat eu. Donec vel arcu laoreet, eleifend purus ut, sodales neque. Pellentesque non ante pulvinar, ultrices ante a, malesuada dolor. Curabitur porttitor sem mauris, quis ultrices turpis posuere id. Phasellus ut scelerisque massa. Cras tincidunt molestie orci eget rhoncus. Sed a eleifend tortor. </p>
			</div>
		</div>
	</body>
<html>
