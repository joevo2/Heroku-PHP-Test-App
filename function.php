<?php

	#PostgreSQL Databse Connection
	$con = pg_connect("dbname=dectdccb9d6neh host=ec2-107-20-191-205.compute-1.amazonaws.com 
		port=5432 user=ilqmgopvoboqqe password=pSt_F9c9Yc4yuJMrYdigezqXAr 
		sslmode=require") or die('Could not connect: ' . pg_last_error());

	#Commonly used SQL function	
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
	function queryInsert ($con, $table, $col, $item) {
		if (is_array($col) && is_array($item)) {
			$query = "INSERT INTO $table (" . implode(', ', $col) . ") VALUES ('" . implode("', '", $item) . "')";
		}
		else {
			$query = "INSERT INTO $table ($col) VALUES ('$item')";
		}
		$result = pg_query($con, $query) or die(pg_last_error($con));	
	}
	function queryAll($con, $table) {
		$query = "SELECT * FROM $table";
		$result = pg_query($con,$query) or die(pg_last_error($con));
		
		return $result;
	}
?>