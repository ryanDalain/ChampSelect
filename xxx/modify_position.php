<html>
<body>

<html>
<body>

        <?php
        
        $db_host = "localhost";
        $db_username = "root";
        $db_pass = "";
        $db_name = "champ select";
        
        @mysql_connect("$db_host","$db_username","$db_pass") or die ("Could not connect to MySQL");
        @mysql_select_db("$db_name") or die ("DB not found");
		
		
		$queryOriginal = "SELECT Name FROM champion";
		$queryPositions = "SELECT DISTINCT(Position_Name) FROM position";
		
		$query_data = mysql_query($queryOriginal) or die("Could not find Champion table");
		$query_data2 = mysql_query($queryPositions) or die("Could not find Position table");
        
        ?>

<br>

<form action="modify_position_results.php" method="post">

<table>
	<tr>
		<td>
			Select Position from list:
		</td>
		<td>
			Select Champ from list:
		</td>
	</tr>
	<tr>
		<td>
			<select name="position_dropdown">
			<?php

				while($info = mysql_fetch_array( $query_data2 )) 
				{
						Print "<option value = \"{$info['Position_Name']}\">{$info['Position_Name']}</option>";
				}

			?>
			</select>
		</td>
		<td>
			<select name="champ_dropdown">
			<?php

				while($info = mysql_fetch_array( $query_data )) 
				{
						Print "<option value = \"{$info['Name']}\">{$info['Name']}</option>";
				}

			?>
			</select>
		</td>
	</tr>
</table>

 <br>

Primary role?<br>
Note: 1 for yes, 0 for no <br>
<input type="number" name="isPrimary" min="0" max="1" value="0"> <br> <br>

<input type="submit" name="modify" value="Add position"> <br>
<input type="submit" name="modify" value="Delete position"> <br>
<input type="submit" name="modify" value="Modify position"> <br>
</form>


</body>
</html>