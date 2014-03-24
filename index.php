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

		<form action="" method="post">
			<input type="text" name="name" placeholder="Your Name">
			<br>
			<input type="text" name="address" placeholder="Your Address">
			<br>
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
	$sql = "CREATE TABLE test (
		id SERIAL AUTO_INCREMENT PRIMARY KEY,
		name VARCHAR(60) NOT NULL,
		address VARCHAR(80) NOT NULL)";
	
	$query = pg_query($sql);

	if ($query)
  		echo "Table Created<br>"; // Check to see if The Query Worked.
	else { 
  		echo "An error Occured! ".pg_last_error()."<br>";
	}
	

	//queryInsert($con, "test", array('name', 'address'),array("$_POST[name]", "$_POST[address]"));
	queryDisplay(queryAll($con, "test"));
?>	
