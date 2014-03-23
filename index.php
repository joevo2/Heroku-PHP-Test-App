<!DOCTYPE html>
<html>
	<head>
		<title>HELP CAT Carpool</title>
		<style type="text/css">
			iframe {
				float: left;
				max-width: 600px;
				width: 100%;
				margin: 10px;
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
	#PostgreSQL Databse Connection
	$con = pg_connect("dbname=dectdccb9d6neh host=ec2-107-20-191-205.compute-1.amazonaws.com 
		port=5432 user=ilqmgopvoboqqe password=pSt_F9c9Yc4yuJMrYdigezqXAr 
		sslmode=require") or die('Could not connect: ' . pg_last_error());
	
	pg_query($con,"CREATE TABLE 'marker'(
		'id' INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
		'name' VARCHAR(60) NOT NULL,
		address' VARCHAR(80) NOT NULL,
		'lat' FLOAT(10,6) NOT NULL,
		'lng' FLOAT(10, 6) NOT NULL
		) ENGINE = POSTGRES
		") or die(pg_last_error();
		$result = pg_query($con, "SHOW COLUMNS FROM marker");

	/*
	function queryDisplay($result) {
		$rowCount = pg_num_rows($result);
		for ($x=0; $x < $rowCount; $x++) { 
			$row = pg_fetch_array($result,PGSQL_NUM);
			for ($i=0; $i < count($row); $i++) {
					echo $row[$i] . " ";
			}
			echo "<br>";
		}
	}

	queryDisplay($con, $result);
	*/


?>	
