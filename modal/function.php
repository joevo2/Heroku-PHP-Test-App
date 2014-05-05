<?php
	#Connection
	include "con.php";

	#Commonly used SQL function	
	function queryDisplay($result) {
		$rowCount = pg_num_rows($result);
		for ($x=0; $x < $rowCount; $x++) { 
			$row = pg_fetch_row($result);
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

	#Create Table
	
	$sql = "CREATE TABLE carpooler (
		id SERIAL PRIMARY KEY,
		name VARCHAR(60),
		email VARCHAR(60),
		password VARCHAR(12),
		gender VARCHAR(6))";
	pg_query($sql) or die(pg_last_error());	
	
?>