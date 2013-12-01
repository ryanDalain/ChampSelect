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

	// Function to easily check either a checkbox has been selected
	function IsChecked($checkname, $value)
	{
		if(!empty($_POST[$checkname]))
		{
			foreach($_POST[$checkname] as $checkvalue)
			{
				if($checkvalue == $value)
				{
					return true;
				}
			}
		}
		return false;
	}



	/* ------- SELECT clause ------- */

	$queryOriginal = " SELECT DISTINCT Name, Position_Name";

	// If the difficulty checkbox is selected, include "Difficulty" into the SELECT clause

	if(IsChecked('check_list', 'Difficulty'))
	{
		$queryOriginal = $queryOriginal . ", Difficulty";
	}

	if(IsChecked('check_list', 'WWW'))
	{
		$queryOriginal = $queryOriginal . ', Champ2 AS Works_With';
	}





	/* ----- FROM clause & INNER JOINs ----- */
	
 	$queryOriginal = $queryOriginal . " FROM champion";

	// For now we assume the results table will also include position_name
	$queryOriginal = $queryOriginal . ' INNER JOIN position ON champion.Name = position.Champ_Name';


	if(IsChecked('check_list', 'CC'))
	{
		$queryOriginal = $queryOriginal . ' INNER JOIN crowd_control ON champion.Name = crowd_control.Champ_Name';
	}

	if(IsChecked('check_list', 'WWW'))
	{
		$queryOriginal = $queryOriginal . ' INNER JOIN www ON champion.Name = www.Champ1';
	}





	/* ------- WHERE clause ------- */

	// For now we assume the user searches for Champions who fulfill their primary position
	$queryOriginal = $queryOriginal . ' WHERE position.isPrimary = 1';

	
	// Create an array, Grab the values from each dropdown menu
	// These are used to determine which Champions and Positions to exclude from the results
	
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

	// Array of booleans holds which positions have been fulfilled
	// (1) Used for determining which positions are open
	// (2) Eliminating duplicate 'AND position <> ""' statements
	$arr_positions_taken = array("Top"=>false, "Middle"=>false, "Jungle"=>false, "Support"=>false, "Carry"=>false);

	$arrlength = count($arr_positions);


	// Check and exclude Champions without Hard CC
	if(IsChecked('check_list', 'CC'))
	{
		$queryOriginal = $queryOriginal . ' AND Type = "Hard"';
	}
	
	// Check and exclude Champions with a difficulty > 5
	if(IsChecked('check_list', 'Difficulty'))
	{
		$queryOriginal = $queryOriginal . ' AND Difficulty < 5';
	}

	// Check and exclude Champions selected
	for($x = 0; $x < $arrlength; $x++)
	{	
		if($arr_champions[$x] != "Default")
		{
			$queryOriginal = $queryOriginal . ' AND Name <> "' . $arr_champions[$x] . '"';
		}		
	}

	// Check and exclude whichever lanes have been selected
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






	/* ----- Results Table ----- */


	// Always order the results by Champion Name
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

	// Now query the database
        $query_data = mysql_query($queryOriginal) or die("Could not find Champion table");
        
        // Formatting for table
        // Table column headings
        Print "<table border cellpadding=3>"; 
        Print "<th>Name</th>";
	Print "<th>Position</th>";

	// If Difficulty checkbox is selected
	if(IsChecked('check_list', 'Difficulty'))
	{
		Print "<th>Difficulty</th>";
	}
	
	// If WWW checkbox is selected
	if(IsChecked('check_list', 'WWW'))
	{
		Print "<th>Works With</th>";
	}

        while($info = mysql_fetch_array( $query_data )) 
        { 
                // table row
                Print "<tr>";

                // table data
                Print "<td>" . $info['Name'] . "</td> "; 
                Print "<td>" . $info['Position_Name'] . "</td> "; 

		// If Difficulty checkbox is selected
		if(IsChecked('check_list', 'Difficulty'))
		{
			Print "<td>" . $info['Difficulty'] . "</td> "; 
		}

		// If WWW checkbox is selected
		if(IsChecked('check_list', 'WWW'))
		{
			Print "<td>" . $info['Works_With'] . "</td> "; 
		}

                // end table row
                Print "</tr>";
        }
        Print "</table>"; 
        
        ?>
<br>


</html>
</body>