
<?php
	
	$db_host = "localhost";
	$db_username = "root";
	$db_pass = "";
	$db_name = "champ select";
	
	@mysql_connect("$db_host","$db_username","$db_pass") or die ("Could not connect to MySQL");
	@mysql_select_db("$db_name") or die ("DB not found");
	
	$modify_query = "";
	
	switch($_POST["modify"])
	{
		case "Add position":
			$modify_query = "INSERT INTO `champ select`.`position` 
					(`Position_Name`, `Champ_Name`, `isPrimary`) VALUES 
					('{$_POST["position_dropdown"]}', '{$_POST["champ_dropdown"]}', '{$_POST["isPrimary"]}');";
			break;
		case "Delete position":
			$modify_query = "DELETE FROM `champ select`.`position`
							WHERE `position`.`Champ_Name` = '{$_POST["champ_dropdown"]}'
							AND `position`.`Position_Name` = '{$_POST["position_dropdown"]}'";
			break;
		case "Modify position":
			$modify_query = "UPDATE `champ select`.`position`
						SET `isPrimary` = {$_POST["isPrimary"]}
						WHERE `position`.`Champ_Name` = '{$_POST["champ_dropdown"]}' 
						AND `position`.`Position_Name` = '{$_POST["position_dropdown"]}'";
			break;
	
	}
	
	echo $modify_query . "<br>";
	$query_data = mysql_query($modify_query) or die("Could not modify position<br>");
	
?>