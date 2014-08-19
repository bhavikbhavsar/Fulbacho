<?php

		include '../db/db.php';
		
		
// 		$mysqli = DB::getInstance()->getConnection();
		
// 		if ($mysqli->connect_errno) {
// 			echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
// 		}
		
		
// 		if(!($result = $mysqli->query("CALL fulbacho.login('eric@gmail.com', '1234')")))
// 			echo "Fallo la query";

		if(!($result = DB::getInstance()->executeQuery("CALL fulbacho.login('eric@gmail.com', '1234')")))
		
		echo "<p>";
		while($row = $result->fetch_array(MYSQLI_NUM))
			echo $row[0] . " " . $row[1] . "<br>";
		echo "</p>";
	
?>
