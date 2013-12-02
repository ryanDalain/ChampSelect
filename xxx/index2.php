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
		
	//foreach($champlist as $name)
		//echo $name . "<br>";
?>

<form action="whatever.php" method="post" target="resultsFrame">
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
		<input type="checkbox" name="check_list[]" value="CC"> Assassin<br>
		<input type="checkbox" name="check_list[]" value="CC"> Fighter<br>
		<input type="checkbox" name="check_list[]" value="CC"> Mage<br>
		<input type="checkbox" name="check_list[]" value="CC"> Marksman<br>
		<input type="checkbox" name="check_list[]" value="CC"> Support<br>
		<input type="checkbox" name="check_list[]" value="CC"> Tank<br>
		</td>
		<td>
		<input type="checkbox" name="check_list[]" value="CC"> Top<br>
		<input type="checkbox" name="check_list[]" value="CC"> Middle<br>
		<input type="checkbox" name="check_list[]" value="CC"> Jungle<br>
		<input type="checkbox" name="check_list[]" value="CC"> Carry<br>
		<input type="checkbox" name="check_list[]" value="CC"> Support<br>
		</td>
		<td>
		<input type="checkbox" name="check_list[]" value="CC"> Hard<br>
		<input type="checkbox" name="check_list[]" value="CC"> Soft<br>
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
			<select name="champ_dropdown_1">
				<option value="Default">Select Champ</option>
				<?php

					foreach($champlist as $name)
						Print "<option value = \"{$name}\">{$name}</option>";

				?>
			</select> <br>
			<select name="champ_dropdown_1">
				<option value="Default">Select Champ</option>
				<?php

					foreach($champlist as $name)
						Print "<option value = \"{$name}\">{$name}</option>";

				?>
			</select> <br>
		</td>
		<td>
			Between <br>
			<input type="number" name="difficulty" min="1" max="10" value="1"> <br>	
			AND <br>
			<input type="number" name="difficulty" min="1" max="10" value="10"> <br>
		</td>
	</tr>
</table>

<input type="submit" value="What champion does all this?">
</form>
<iframe width="400" height="400" name="resultsFrame" frameborder="0"></iframe>

</body>
</html>