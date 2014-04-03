<?php	
	#Heroku PostgreSQL Databse Connection
	
	$con = pg_connect("dbname=dectdccb9d6neh host=ec2-107-20-191-205.compute-1.amazonaws.com 
		port=5432 user=ilqmgopvoboqqe password=pSt_F9c9Yc4yuJMrYdigezqXAr 
		sslmode=require") or die('Could not connect: ' . pg_last_error());
	
	/*
	#Localhost Postgresql Database Connection
	$con = pg_connect("dbname=postgres host=localhost
		port=5432 user=Joel password=jj021192 
		") or die('Could not connect: ' . pg_last_error());
	/*
?>