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

	// Function to easily append AND operator for the WHERE clause
	function append_AND(&$input_string)
	{
		if(substr($input_string, -3) != 'AND' && substr($input_string, -5) != 'WHERE' )
		{
			$input_string = $input_string . ' AND';
		}
	}

	// Store www Champion selections
	$www_1 = $_POST["champ_dropdown_1"];
	$www_2 = $_POST["champ_dropdown_2"];
	$www_3 = $_POST["champ_dropdown_3"];

	// For the ease of coding and readability instead of checking to see if each has been selected everytime
	$role_selected		 = false;
	$role_sec_selected	 = false;
	$position_selected	 = false;
	$position_sec_selected	 = false;
	$cc_selected		 = false;
	$www_selected		 = false;
	$difficulty_selected	 = false;

	if(IsChecked('check_list', 'Assassin') || IsChecked('check_list', 'Mage') || IsChecked('check_list', 'Marksman') || IsChecked('check_list', 'Role_Support') || IsChecked('check_list', 'Tank') || IsChecked('check_list', 'Fighter') )
	{	
		$role_selected = true;	
	}

	if(IsChecked('check_list', 'Role_Secondary') )
	{
		$role_sec_selected = true;
	}

	if(IsChecked('check_list', 'Top') || IsChecked('check_list', 'Middle')  || IsChecked('check_list', 'Jungle')  || IsChecked('check_list', 'Carry')  || IsChecked('check_list', 'Position_Support') ) 
	{
		$position_selected = true;
	}

	if(IsChecked('check_list', 'Position_Secondary') )
	{
		$position_sec_selected = true;
	}

	if(IsChecked('check_list', 'Hard') || IsChecked('check_list', 'Soft') )
	{
		$cc_selected = true;
	}

	if($www_1 != "Default" || $www_2 != "Default" || $www_3 != "Default")
	{
		$www_selected = true;
	}		

	if($_POST["min_difficulty"] != 1 || $_POST["max_difficulty"] != 10)
	{
		$difficulty_selected = true;
	}



	/* ------- SELECT clause ------- */

	$queryOriginal = "SELECT DISTINCT Name";

	if($role_selected)
	{
		$queryOriginal = $queryOriginal . ", Role_Name";

		if($role_sec_selected)
		{
			$queryOriginal = $queryOriginal . ", role.isPrimary AS Role_Priority";
		}
	}

	if($position_selected)
	{
		$queryOriginal = $queryOriginal . ", Position_Name";

		if($position_sec_selected)
		{
			$queryOriginal = $queryOriginal . ", position.isPrimary AS Position_Priority";
		}
	}

	if($cc_selected)
	{
		$queryOriginal = $queryOriginal . ", Type";
	}

	if($www_selected)
	{
		$queryOriginal = $queryOriginal . ", Champ2 AS Works_With";		
	}

	if($difficulty_selected)
	{
		$queryOriginal = $queryOriginal . ", Difficulty";	
	}



	/* ----- FROM clause & INNER JOINs ----- */

	$queryOriginal = $queryOriginal . " FROM champion";

	if($role_selected)
	{
		$queryOriginal = $queryOriginal . " INNER JOIN role ON champion.Name = role.Champ_Name";
	}

	if($position_selected)
	{
		$queryOriginal = $queryOriginal . " INNER JOIN position ON champion.Name = position.Champ_Name";
	}

	if($cc_selected)
	{
		$queryOriginal = $queryOriginal .  " INNER JOIN crowd_control ON champion.Name = crowd_control.Champ_Name";
	}

	if($www_selected)
	{
		$queryOriginal = $queryOriginal .  " INNER JOIN www ON champion.Name = www.Champ1";
	}

	// Note: difficulty is part of the champion table
	// Whether or not difficulty is selected, there is no table to join



	/* ------- WHERE clause ------- */

	$queryOriginal = $queryOriginal . ' WHERE';
	

	// If the user selects nothing, do not specficy a WHERE clause
	
	if(!$role_selected && !$position_selected && !$cc_selected && !$www_selected & !$difficulty_selected)
	{
		$queryOriginal = $queryOriginal . ' 1';
	}


	// -- Role -- 

	if($role_selected)
	{
		if($role_sec_selected)
		{
			$queryOriginal = $queryOriginal . ' Role_Name IN (';	
		}
		else
		{
			$queryOriginal = $queryOriginal . ' role.isPrimary = 1 AND Role_Name IN (';
		}

		if(IsChecked('check_list', 'Assassin') )
		{
			$queryOriginal = $queryOriginal . '"Assassin",';	
		}
	
		if(IsChecked('check_list', 'Mage') )
		{
			$queryOriginal = $queryOriginal . '"Mage",';
		}
	
		if(IsChecked('check_list', 'Marksman') )
		{
			$queryOriginal = $queryOriginal . '"Marksman",';
		}
	
		if(IsChecked('check_list', 'Role_Support') )
		{
			$queryOriginal = $queryOriginal . '"Support",';
		}
	
		if(IsChecked('check_list', 'Tank') )
		{
			$queryOriginal = $queryOriginal . '"Tank",';
		}
		if(IsChecked('check_list', 'Fighter') )
		{	
			$queryOriginal = $queryOriginal . '"Fighter",';	
		}

		$queryOriginal = substr($queryOriginal, 0, -1);
		$queryOriginal = $queryOriginal . ')';
	}


	// -- Position -- 

	if($position_selected)
	{
		append_AND($queryOriginal);

		if($position_sec_selected)
		{
			$queryOriginal = $queryOriginal . ' Position_Name IN (';	
		}
		else
		{
			$queryOriginal = $queryOriginal . ' position.isPrimary = 1 AND Position_Name IN (';
		}

		if(IsChecked('check_list', 'Top') )
		{
			$queryOriginal = $queryOriginal . '"Top",';	
		}
	
		if(IsChecked('check_list', 'Middle') )
		{
			$queryOriginal = $queryOriginal . '"Middle",';
		}
	
		if(IsChecked('check_list', 'Jungle') )
		{
			$queryOriginal = $queryOriginal . '"Jungle",';
		}
	
		if(IsChecked('check_list', 'Position_Support') )
		{
			$queryOriginal = $queryOriginal . '"Bot Support",';
		}
	
		if(IsChecked('check_list', 'Carry') )
		{
			$queryOriginal = $queryOriginal . '"Bot Carry",';
		}

		$queryOriginal = substr($queryOriginal, 0, -1);
		$queryOriginal = $queryOriginal . ')';
	}


	// -- Crowd Control -- 

	if($cc_selected)
	{
		append_AND($queryOriginal);

		$queryOriginal = $queryOriginal . ' Type IN (';

		if(IsChecked('check_list', 'Hard') )
		{
			$queryOriginal = $queryOriginal . '"Hard",';	
		}
	
		if(IsChecked('check_list', 'Soft') )
		{
			$queryOriginal = $queryOriginal . '"Soft",';
		}

		$queryOriginal = substr($queryOriginal, 0, -1);
		$queryOriginal = $queryOriginal . ')';
	}


	// -- WWW --

	if($www_selected)
	{
		append_AND($queryOriginal);

		$queryOriginal = $queryOriginal . ' Champ2 IN (';

		if($www_1 != "Default")
		{
			$queryOriginal = $queryOriginal . '"' . $www_1 . '",';
		}
	
		if($www_2 != "Default")
		{
			$queryOriginal = $queryOriginal . '"' . $www_2 . '",';
		}

		if($www_3 != "Default")
		{
			$queryOriginal = $queryOriginal . '"' . $www_3 . '",';
		}

		$queryOriginal = substr($queryOriginal, 0, -1);
		$queryOriginal = $queryOriginal . ')';
	}


	// -- Difficulty --

	if($difficulty_selected)
	{
		append_AND($queryOriginal);

		$queryOriginal = $queryOriginal . ' Difficulty >= ' . $_POST["min_difficulty"] . ' AND Difficulty <= ' . $_POST["max_difficulty"];

		if( $_POST["min_difficulty"] > $_POST["max_difficulty"] )
		{
			echo "Note: Selected a MIN difficulty greater than MAX difficulty" . "<br>" . "<br>";
		}
	}



	/* ----- Results Table ----- */

        echo $queryOriginal . "<br>";        
	echo "<br>";

	// Now query the database
        $query_data = mysql_query($queryOriginal) or die("Could not find Champion table");
        
        // Formatting for table
        // Table column headings
        Print "<table border cellpadding=3>"; 
        Print "<th>Name</th>";

	if($role_selected)
	{
		Print "<th>Role</th>";

		if($role_sec_selected)
		{
			Print "<th>Role Priority</th>";
		}
	}

	if($position_selected)
	{
		Print "<th>Position</th>";

		if($position_sec_selected)
		{
			Print "<th>Position Priority</th>";
		}
	}

	if($cc_selected)
	{
		Print "<th>CC Type</th>";
	}

	if($www_selected)
	{
		Print "<th>Works With</th>";
	}

	if($difficulty_selected)
	{
		Print "<th>Difficulty</th>";
	}

        while($info = mysql_fetch_array( $query_data )) 
        { 
                // table row
                Print "<tr>";

                // table data
                Print "<td>" . $info['Name'] . "</td> "; 

		if($role_selected)
		{
			Print "<td>" . $info['Role_Name'] . "</td> "; 

			if($role_sec_selected)
			{
				Print "<td>" . $info['Role_Priority'] . "</td> "; 
			}
		}

		if($position_selected)
		{
			Print "<td>" . $info['Position_Name'] . "</td> "; 

			if($position_sec_selected)
			{
				Print "<td>" . $info['Position_Priority'] . "</td> "; 
			}
		}

		if($cc_selected)
		{
			Print "<td>" . $info['Type'] . "</td> ";
		}

		if($www_selected)
		{
			Print "<td>" . $info['Works_With'] . "</td> ";
		}
		
		if($difficulty_selected)
		{
			Print "<td>" . $info['Difficulty'] . "</td> ";
		}
                // end table row
                Print "</tr>";
        }
        Print "</table>"; 
        
        ?>
<br>


</html>
</body>