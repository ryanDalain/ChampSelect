
<?php
	
	$db_host = "localhost";
	$db_username = "root";
	$db_pass = "";
	$db_name = "champ select";
	
	@mysql_connect("$db_host","$db_username","$db_pass") or die ("Could not connect to MySQL");
	@mysql_select_db("$db_name") or die ("DB not found");
	
	switch($_POST["modify"])
	{
		case "Add Ability":
			// Copy fields into local variables
			$ability = $_POST["ability_name"];
			$champ = $_POST["champ_dropdown"];
			$type = $_POST["type_dropdown"];
			
			// Trim leading/ending white-space
			$ability = trim($ability);
			
			// Capitalize first letter
			$ability = ucfirst($ability);

			$modify_query = "INSERT INTO `crowd_control` 
					(`Ability_Name`, `Champ_Name`, `Type`) VALUES 
					('{$ability}', '{$champ}', '{$type}');";

			break;

		case "Delete Ability":

			$modify_query = "DELETE FROM `crowd_control` WHERE `Ability_Name` = '{$_POST["ability_dropdown"]}'";

			break;

		case "Modify Ability":
			$modify_query = "UPDATE `crowd_control`
						SET `Type` = '{$_POST["type_dropdown"]}',
						`Champ_Name` = '{$_POST["champ_dropdown"]}' 
						WHERE `Ability_Name` = '{$_POST["ability_dropdown"]}'";
			//echo "3 <br>";
			break;
	
	}
	
	echo $modify_query . "<br>";
	$query_data = mysql_query($modify_query) or die("Could not modify champion<br>");

?>

<br> <br> <a href="backend.php">Backend page</a> <br> <br>


