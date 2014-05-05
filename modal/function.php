<?php
	#Connection
	require "con.php";

	#Commonly used SQL function	
	function queryDisplay($result,$rowCount = -1) {
		if ($rowCount == -1) {
			$rowCount = pg_num_rows($result);
		}
		for ($x=0; $x < $rowCount; $x++) { 
			$row = pg_fetch_row($result);
			for ($i=0; $i < count($row); $i++) {
					echo $row[$i] . " ";
			}
			echo "<br>";
		}
	}

	function queryInsert ($table, $col, $item) {
		if (is_array($col) && is_array($item)) {
			$query = "INSERT INTO $table (" . implode(', ', $col) . ") VALUES ('" . implode("', '", $item) . "')";
		}
		else {
			$query = "INSERT INTO $table ($col) VALUES ('$item')";
		}
		return $result = pg_query($query) or die(pg_last_error());	
	}
	
	function queryAll($table) {
		$query = "SELECT * FROM $table";
		$result = pg_query($query) or die(pg_last_error());
		
		return $result;
	}

	function queryItem($table, $col, $item) {
		if (is_array($col) && is_array($item)) {
			$query = "SELECT * FROM $table WHERE ";
			for ($i=0; $i < count($item); $i++) {
				$query .= $col[$i] . " = '" . $item[$i] . "'";
				if ($i != count($item)-1) {
					$query .= " AND ";
				}
			}
		} else {
			$query = "SELECT * FROM $table WHERE $col = '$item'";
		}
		$result = pg_query($query) or die(pg_last_error());

		return $result;
	}

	#Create Table
	/*
	$sql = "CREATE TABLE users (
		id SERIAL PRIMARY KEY,
		name VARCHAR(60),
		email VARCHAR(60),
		password VARCHAR(12),
		gender VARCHAR(6))";
	pg_query($sql) or die(pg_last_error());	
	*/
?>