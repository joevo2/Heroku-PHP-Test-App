<!DOCTYPE html>
<html>
	<head>
		<title>HELP CAT Carpool</title>
		<style type="text/css">
			iframe {
				max-width: 600px;
				width: 100%;
			}
		</style>
	</head>
	<body>
		<h1>HELP CAT Car Pool Database</h1>
		<!-- Google Map Embed -->
		<iframe
		  width="600"
		  height="450"
		  frameborder="0" style="border:0"
		  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDsA-rWJVhqWo5XhCH3f6eOwjQol2hyCCc
		    &q=HELP+College+of+Arts+and+Technology">
		</iframe>

		<form>
			<input type="text" placeholder="Testing">
			<input type="submit">
		</form>

	</body>
<html>

<?php
	#PHP Function
	include 'function.php';

	#PostgreSQL Databse Connection
	$con = pg_connect("dbname=dectdccb9d6neh host=ec2-107-20-191-205.compute-1.amazonaws.com 
		port=5432 user=ilqmgopvoboqqe password=pSt_F9c9Yc4yuJMrYdigezqXAr 
		sslmode=require") or die('Could not connect: ' . pg_last_error());
	#Create Table
	$sql = "DROP TABLE user";
	$query = pg_query($sql);

	if ($query)
  		echo "Table Created<br>"; // Check to see if The Query Worked.
	else { 
  		echo "An error Occured! ".pg_last_error()."<br>";
	}

	//queryDisplay(queryInsert($con, "user", array('name', 'address'),array("Joel Yek", "BAM Villa, Taman Maluri")));
?>	
