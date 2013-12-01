
<?php
	
	$db_host = "localhost";
	$db_username = "root";
	$db_pass = "";
	$db_name = "champ select";
	
	@mysql_connect("$db_host","$db_username","$db_pass") or die ("Could not connect to MySQL");
	@mysql_select_db("$db_name") or die ("DB not found");
	
	switch($_POST["modify"])
	{
		case "Add new pair":

			// Copy fields into local variables
			$Champ1 = $_POST["champ_dropdown_1"];
			$Champ2 = $_POST["champ_dropdown_2"];
			
			$modify_query = "INSERT INTO `www`(`Champ1`, `Champ2`) VALUES ('{$Champ1}','{$Champ2}');";			

			break;

		case "Delete pair":

			$Champ1 = $_POST["champ_dropdown_1"];
			$Champ3 = $_POST["champ_dropdown_3"];
	
			$modify_query = "DELETE FROM `www` WHERE Champ1 = '" . $Champ1 . "' AND Champ2 = '" . $Champ3 . "';";

			break;

		case "Modify pair":

			$Champ1 = $_POST["champ_dropdown_1"];
			$Champ3 = $_POST["champ_dropdown_3"];			
			$Champ4 = $_POST["champ_dropdown_4"];
	
			$modify_query = "UPDATE `www` SET Champ1= '" . $Champ1 . "', Champ2= '" . $Champ4 . "' WHERE Champ1 = '" . $Champ1 . "' AND Champ2 = '" . $Champ3 . "';";

			break;
	
	}

	echo $modify_query . "<br>";
	$query_data = mysql_query($modify_query) or die("Could not modify pair<br>");
	
?>

<br> <br> <a href="backend.php">Backend page</a> <br> <br>
