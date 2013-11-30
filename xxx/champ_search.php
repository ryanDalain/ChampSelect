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
        
        // Set up base query
        $queryOriginal = "SELECT Name, Position_Name FROM champion";

	// Create an array, Grab the values from each dropdown menu
	// champions
	$arr_champions = array($_POST["champ_dropdown_1"],
				 $_POST["champ_dropdown_2"],
				 $_POST["champ_dropdown_3"],
				 $_POST["champ_dropdown_4"],
				 $_POST["champ_dropdown_5"]);

	// positions	
	$arr_positions = array($_POST["position_dropdown_1"],
				 $_POST["position_dropdown_2"],
				 $_POST["position_dropdown_3"],
				 $_POST["position_dropdown_4"],
				 $_POST["position_dropdown_5"]);


	$arr_positions_taken = array("Top"=>false, "Middle"=>false, "Jungle"=>false, "Support"=>false, "Carry"=>false);

	$arrlength = count($arr_positions);

	$queryOriginal = $queryOriginal . ' INNER JOIN position ON champion.Name = position.Champ_Name';
	$queryOriginal = $queryOriginal . ' WHERE position.isPrimary = 1';

	// Check and exclude Champions selected
	for($x = 0; $x < $arrlength; $x++)
	{	
		if($arr_champions[$x] != "Default")
		{
			$queryOriginal = $queryOriginal . ' AND Name <> "' . $arr_champions[$x] . '"';
		}		
	}

	// Check which lanes have been selected
	for($x = 0; $x < $arrlength; $x++)
	{	
		switch($arr_positions[$x])
		{
		case "Top":
			if($arr_positions_taken['Top'] == false)
			{
				$queryOriginal = $queryOriginal . ' AND Position_Name <> "Top"';
				$arr_positions_taken['Top'] = true;
			}
			break;

		case "Middle":
			if($arr_positions_taken['Middle'] == false)
			{
				$queryOriginal = $queryOriginal . ' AND Position_Name <> "Middle"';
				$arr_positions_taken['Middle'] = true;
			}
			break;
			
		case "Jungle":
			if($arr_positions_taken['Jungle'] == false)
			{
				$queryOriginal = $queryOriginal . ' AND Position_Name <> "Jungle"';
				$arr_positions_taken['Jungle'] = true;
			}
			break;

		case "Support":
			if($arr_positions_taken['Support'] == false)
			{
				$queryOriginal = $queryOriginal . ' AND Position_Name <> "Bot Support"';
				$arr_positions_taken['Support'] = true;
			}
			break;

		case "Carry":
			if($arr_positions_taken['Carry'] == false)
			{
				$queryOriginal = $queryOriginal . ' AND Position_Name <> "Bot Carry"';
				$arr_positions_taken['Carry'] = true;
			}
			break;
		}		
	}

	$queryOriginal = $queryOriginal . " ORDER BY position.Position_Name ASC";

        echo $queryOriginal . "<br>";        
	echo "<br>";
	echo "Open Positions: " . "<br>";

	foreach($arr_positions_taken as $x => $x_value)
	{
		if($x_value == false)
		{
			echo $x . " ";
		}
	}
	
	echo "<br>";

	// now query the database
        $query_data = mysql_query($queryOriginal) or die("Could not find Champion table");
        
        // formatting for table
        // table column headings
        Print "<table border cellpadding=3>"; 
        Print "<th>Name</th>";
	Print "<th>Position</th>";

        while($info = mysql_fetch_array( $query_data )) 
        { 
                // table row
                Print "<tr>";

                // table data
                Print "<td>" . $info['Name'] . "</td> "; 
                Print "<td>" . $info['Position_Name'] . "</td> "; 

                // end table row
                Print "</tr>";
        }
        Print "</table>"; 
        
        ?>
<br>


</html>
</body>