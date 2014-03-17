<!DOCTYPE html>
<html>
	<head>
		<title>Heroku PHP Test Page</title>
		<style type="text/css">
		</style>
	</head>
	<body>
		<h1>Testing HTML!</h1>
		<img src="http://placehold.it/320x320">
	</body>
<html>

<?php
	echo "Hello World";
	
	#PostgreSQL Databse Connection
	$db = pg_connect("dbname=dectdccb9d6neh host=ec2-107-20-191-205.compute-1.amazonaws.com 
		port=5432 user=ilqmgopvoboqqe password=pSt_F9c9Yc4yuJMrYdigezqXAr 
		sslmode=require") or die('Could not connect: ' . pg_last_error());;
	
	#Query, similar to MySQL
	#$result = pg_query($db,"SELECT ...")
?>	
