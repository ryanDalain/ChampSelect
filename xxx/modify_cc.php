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
		
		
		$queryOriginal_ability = "SELECT Ability_Name FROM crowd_control ORDER BY Ability_Name ASC";
		$queryOriginal_champ = "SELECT Name FROM champion";

		$query_data_ability = mysql_query($queryOriginal_ability) or die("Could not find Ability table");
        	$query_data_champ = mysql_query($queryOriginal_champ) or die("Could not find Champion table");
        ?>

<br>

<form action="modify_cc_results.php" method="post">

<table>
	<tr>
		<td>
			New Ability name:
		</td>
		<td>
			Select Ability from list:
		</td>
	</tr>
	<tr>
		<td>
			<input type="text" name="ability_name"> OR 
		</td>
		<td>
			<select name="ability_dropdown">
			<?php

				while($info = mysql_fetch_array( $query_data_ability )) 
				{
					Print "<option value = \"{$info['Ability_Name']}\">{$info['Ability_Name']}</option>";
				}

			?>
			</select>
		</td>
	</tr>
</table>

 <br>

<table>
	<tr>
		<td>
			Select a Champion:
		</td>

		<td>
			<select name="champ_dropdown">
			<?php

				while($info = mysql_fetch_array( $query_data_champ )) 
				{
					Print "<option value = \"{$info['Name']}\">{$info['Name']}</option>";
				}

			?>
			</select>
		</td>
	</tr>
</table>

<br>

<table>
	<tr>
		<td>
			Select a Type of Crowd Control:
		</td>

		<td>
			<select name="type_dropdown">
					<option value="None">None</option>
					<option value="Soft">Soft</option>
					<option value="Hard">Hard</option>
			</select>
		</td>
	</tr>
</table>

<br>

<input type="submit" name="modify" value="Add Ability"> <br>
<input type="submit" name="modify" value="Delete Ability"> <br>
<input type="submit" name="modify" value="Modify Ability"> <br>
</form>

<br> <br> <a href="backend.php">Backend page</a> <br> <br>

</body>
</html>