<html>
<body>

<?php
        
	$db_host = "localhost";
	$db_username = "root";
	$db_pass = "";
	$db_name = "champ select";
	
	@mysql_connect("$db_host","$db_username","$db_pass") or die ("Could not connect to MySQL");
	@mysql_select_db("$db_name") or die ("DB not found");
	
	$champlist = array();
	
	$queryOriginal = "SELECT Name FROM champion";
	
	$query_data = mysql_query($queryOriginal) or die("Could not find Champion table");
	
	while($info = mysql_fetch_array( $query_data )) 
		$champlist[] = $info['Name'];
?>

<form action="champ_search2.php" method="post" target="resultsFrame">
<table border cellpadding="1">
	<tr>
		<td>
			<h2> Role </h2>
		</td>
		<td>
			<h2> Position </h2>
		</td>
		<td>
			<h2> Crowd Control </h2>
		</td>
		<td>
			<h2> Works Well With </h2>
		</td>
		<td>
			<h2> Difficulty </h2>
		</td>
	</tr>
	<tr>
		<td>
		<input type="checkbox" name="check_list[]" value="Assassin"> Assassin<br>
		<input type="checkbox" name="check_list[]" value="Fighter"> Fighter<br>
		<input type="checkbox" name="check_list[]" value="Mage"> Mage<br>
		<input type="checkbox" name="check_list[]" value="Marksman"> Marksman<br>
		<input type="checkbox" name="check_list[]" value="Role_Support"> Support<br>
		<input type="checkbox" name="check_list[]" value="Tank"> Tank<br>
		<br>
		<input type="checkbox" name="check_list[]" value="Role_Secondary">Include<br>Secondary<br>
		</td>
		<td>
		<input type="checkbox" name="check_list[]" value="Top"> Top<br>
		<input type="checkbox" name="check_list[]" value="Middle"> Middle<br>
		<input type="checkbox" name="check_list[]" value="Jungle"> Jungle<br>
		<input type="checkbox" name="check_list[]" value="Carry"> Carry<br>
		<input type="checkbox" name="check_list[]" value="Position_Support"> Support<br>
		<br>
		<input type="checkbox" name="check_list[]" value="Position_Secondary">Include<br>Secondary<br>
		</td>
		<td>
		<input type="checkbox" name="check_list[]" value="Hard"> Hard<br>
		<input type="checkbox" name="check_list[]" value="Soft"> Soft<br>
		</td>
		<td>
			select up to 3 <br>
			<select name="champ_dropdown_1">
				<option value="Default">Select Champ</option>
				<?php

					foreach($champlist as $name)
						Print "<option value = \"{$name}\">{$name}</option>";

				?>
			</select> <br>
			<select name="champ_dropdown_2">
				<option value="Default">Select Champ</option>
				<?php

					foreach($champlist as $name)
						Print "<option value = \"{$name}\">{$name}</option>";

				?>
			</select> <br>
			<select name="champ_dropdown_3">
				<option value="Default">Select Champ</option>
				<?php

					foreach($champlist as $name)
						Print "<option value = \"{$name}\">{$name}</option>";

				?>
			</select> <br>
		</td>
		<td>
			Between <br>
			<input type="number" name="min_difficulty" min="1" max="10" value="1"> <br>	
			AND <br>
			<input type="number" name="max_difficulty" min="1" max="10" value="10"> <br>
		</td>
	</tr>
</table>

<input type="submit" value="What champion does all this?">
</form>
<iframe width="400" height="400" name="resultsFrame" frameborder="0"></iframe>

</body>
</html>