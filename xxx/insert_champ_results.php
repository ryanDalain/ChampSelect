<html>
<body>

	<?php
	
	$db_host = "localhost";
	$db_username = "root";
	$db_pass = "";
	$db_name = "champ select";
	
	@mysql_connect("$db_host","$db_username","$db_pass") or die ("Could not connect to MySQL");
	@mysql_select_db("$db_name") or die ("DB not found");
	
	?>

<br>

	<?php
	
	// copy fields into local variables
	$name = $_POST["name"];
	$difficulty = $_POST["difficulty"];
	$win_rate = $_POST["win_rate"];
	
	// trim leading/ending white-space
	$name = trim($name);
		// capitalize first letter
		$name = ucfirst($name);
	$difficulty = $difficulty;
	$win_rate = floatval(trim($win_rate));
	$win_rate = floatval(number_format($win_rate, 2));
	// check range of values
	if($win_rate < 0 || $win_rate > 100){
		echo "Invalid win rate specified. <br>";
		$win_rate = 0;
	}
	
	$insert_query = "INSERT INTO `champ select`.`champion` 
					(`Name`, `Difficulty`, `Win_Rate`) VALUES 
					('{$name}', '{$difficulty}', '{$win_rate}');";
	
	echo $insert_query . "<br>";
	$query_data = mysql_query($insert_query) 
	or die("Could not insert champion, please check the following: <br>
			1. Champion name must be filled out <br>
			2. Champion name must not already exist in table <br>");
			
	if($query_data)
		echo "Successfully inserted <br>";
	
	?>


</body>
</html>