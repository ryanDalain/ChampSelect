
<?php
	
	$db_host = "localhost";
	$db_username = "root";
	$db_pass = "";
	$db_name = "champ select";
	
	@mysql_connect("$db_host","$db_username","$db_pass") or die ("Could not connect to MySQL");
	@mysql_select_db("$db_name") or die ("DB not found");
	
	switch($_POST["modify"])
	{
		case "Add new champion":
			// copy fields into local variables
			$name = $_POST["name"];
			$difficulty = $_POST["difficulty"];
			$win_rate = $_POST["win_rate"];
			
			// trim leading/ending white-space
			$name = trim($name);
				// capitalize first letter
				$name = ucfirst($name);
			$win_rate = floatval(trim($win_rate));
			$win_rate = floatval(number_format($win_rate, 2));
			// check range of values
			if($win_rate < 0 || $win_rate > 100){
				echo "Invalid win rate specified. <br>";
				$win_rate = 0;
			}
			
			$modify_query = "INSERT INTO `champ select`.`champion` 
					(`Name`, `Difficulty`, `Win_Rate`) VALUES 
					('{$name}', '{$difficulty}', '{$win_rate}');";
			//echo "1 <br>";
			break;
		case "Delete champion":
			$modify_query = "DELETE FROM `champ select`.`champion` WHERE `champion`.`Name` = '{$_POST["champ_dropdown"]}'";
			//echo "2 <br>";
			break;
		case "Modify champion stats":
			$modify_query = "UPDATE `champ select`.`champion`
						SET `Win_Rate` = {$_POST["win_rate"]},
						`Difficulty` = {$_POST["difficulty"]} 
						WHERE `champion`.`Name` = '{$_POST["champ_dropdown"]}'";
			//echo "3 <br>";
			break;
	
	}
	
	$query_data = mysql_query($modify_query) or die("Could not modify champion<br>");
?>