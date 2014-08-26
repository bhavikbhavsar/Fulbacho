<?php

		include '../db/db.php';
		
		
		if(!($result = DB::getInstance()->executeQuery("CALL fulbacho.login('eric@gmail.com', '1234')")))
		
		echo "<p>";
		while($row = $result->fetch_array(MYSQLI_NUM))
			echo $row[0] . " " . $row[1] . "<br>";
		echo "</p>";
	
?>
