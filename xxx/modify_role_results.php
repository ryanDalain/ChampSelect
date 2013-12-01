
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
		case "Add role":
			$modify_query = "INSERT INTO `champ select`.`role` 
					(`role_Name`, `Champ_Name`, `isPrimary`) VALUES 
					('{$_POST["role_dropdown"]}', '{$_POST["champ_dropdown"]}', '{$_POST["isPrimary"]}');";
			break;
		case "Delete role":
			$modify_query = "DELETE FROM `champ select`.`role`
							WHERE `role`.`Champ_Name` = '{$_POST["champ_dropdown"]}'
							AND `role`.`role_Name` = '{$_POST["role_dropdown"]}'";
			break;
		case "Modify role":
			$modify_query = "UPDATE `champ select`.`role`
						SET `isPrimary` = {$_POST["isPrimary"]}
						WHERE `role`.`Champ_Name` = '{$_POST["champ_dropdown"]}' 
						AND `role`.`role_Name` = '{$_POST["role_dropdown"]}'";
			break;
	
	}
	
	echo $modify_query . "<br>";
	$query_data = mysql_query($modify_query) or die("Could not modify role<br>");
	
?>

<br> <br> <a href="backend.php">Backend page</a> <br> <br>
