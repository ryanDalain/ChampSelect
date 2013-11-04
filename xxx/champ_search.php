<html>
<body>

	<?php
	
	$db_host = "localhost";
	$db_username = "root";
	$db_pass = "";
	$db_name = "champ select";
	
	@mysql_connect("$db_host","$db_username","$db_pass") or die ("Could not connect to MySQL");
	@mysql_select_db("$db_name") or die ("DB not found");
	
	echo "Successfully Connected to DB";
	?>
<br>

	<?php
	
	// Set up base query
	$queryOriginal = "SELECT * FROM Champion";
		$queryByName = " WHERE Champion.Name = ";
		$queryByDifficulty = " WHERE Champion.Difficulty = ";
		$queryByWinRate = "";
	$queryData = "";
		
	// depending on drop-down menu, append original query
	/*
	switch($_POST['search_peram'])
	{
		case "Name":
			echo "You Wanted to search by name!<br>";
			$queryOriginal .= $queryByName;
			break;
		case "Difficulty":
			$queryOriginal .= $queryByDifficulty;
			echo "You Wanted to search by Difficulty!<br>";
			break;
		case "Win Rate":
			// flexibility of win rate within 0.1
			$queryByWinRate .= " WHERE Champion.Win_Rate > '{$_POST['input_box']}' - 0.1 AND
										Champion.Win_Rate < '{$_POST['input_box']}' + 0.1";
			$queryOriginal .= $queryByWinRate;
			echo "You Wanted to search by Win Rate!<br>";
			break;
		default:
			echo "Could not resolve switch case<br>";
			break;
	}
	*/
	// echo what the final query is
	
	echo $queryOriginal . "<br>";
	
	// now query the database
	$query_data = mysql_query($queryOriginal) or die("Could not find Champion table");
	
	// formatting for table
		// table column headings
	Print "<table border cellpadding=3>"; 
	Print "<th>Name</th>";
	Print "<th>Difficulty</th>";
	Print "<th>Win Rate</th>";
	while($info = mysql_fetch_array( $query_data )) 
	{ 
		// table row
		Print "<tr>";
		// table data
		Print "<td>" . $info['Name'] . "</td> "; 
		Print "<td>" . $info['Difficulty'] . " </td>"; 
		Print "<td>" . $info['Win_Rate'] . "% </td>"; 
		// end table row
		Print "</tr>";
	}
	Print "</table>"; 
	
	?>
<br>


</html>
</body>
