<!DOCTYPE html>
<html>
	<head>
		<title>Carpool for HELP CAT</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<style>
	      #map-canvas {
	        height: 500px;
	        max-width: 500px;
	        margin: 0px;
	        padding: 0px
	      }
    	</style>
	    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
	    <script>
		      function initialize() {
				  var mapOptions = {
				    zoom: 16
				  };
				  map = new google.maps.Map(document.getElementById('map-canvas'),
				      mapOptions);

				  // Try HTML5 geolocation
				  if(navigator.geolocation) {
				    navigator.geolocation.getCurrentPosition(function(position) {
				      var pos = new google.maps.LatLng(position.coords.latitude,
				                                       position.coords.longitude);

				      var infowindow = new google.maps.InfoWindow({
				        map: map,
				        position: pos,
				        content: 'You!'
				      });

				      map.setCenter(pos);
				    }, function() {
				      handleNoGeolocation(true);
				    });
				  } else {
				    // Browser doesn't support Geolocation
				    handleNoGeolocation(false);
				  }
				}

				function handleNoGeolocation(errorFlag) {
				  if (errorFlag) {
				    var content = 'Error: The Geolocation service failed.';
				  } else {
				    var content = 'Error: Your browser doesn\'t support geolocation.';
				  }

				  var options = {
				    map: map,
				    position: new google.maps.LatLng(60, 105),
				    content: content
				  };

				  var infowindow = new google.maps.InfoWindow(options);
				  map.setCenter(options.position);
				}

				google.maps.event.addDomListener(window, 'load', initialize);
	    </script>
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
		</div>
	</body>
<html>


