<?php
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
		$result = mysqli_query($con, $query) or die(mysqli_error($con));
	}
?>