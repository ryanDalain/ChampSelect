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


<form action="champ_search.php" method="post" target="resultsFrame">
	<table>
		
		<tr>
			<td>Question</td>
			<td>Team mate #1</td>
			<td>Team mate #2</td>
			<td>Team mate #3</td>
			<td>Team mate #4</td>
		</tr>
		<tr> <!--Row 1-->
			<td>Do you know any team mates?</td>
			<td>
			<select name="champ_dropdown_1">
				<option value="Default">Select Champ</option>
				<?php

					foreach($champlist as $name)
						Print "<option value = \"{$name}\">{$name}</option>";

				?>
			</select>
			</td>
			<td>
			<select name="champ_dropdown_2">
				<option value="Default">Select Champ</option>
				<?php

					foreach($champlist as $name)
						Print "<option value = \"{$name}\">{$name}</option>";

				?>
			</select>
			</td>
			<td>
			<select name="champ_dropdown_3">
				<option value="Default">Select Champ</option>
				<?php

					foreach($champlist as $name)
						Print "<option value = \"{$name}\">{$name}</option>";

				?>
			</select>
			</td>
			<td>
			<select name="champ_dropdown_4">
				<option value="Default">Select Champ</option>
				<?php

					foreach($champlist as $name)
						Print "<option value = \"{$name}\">{$name}</option>";

				?>
			</select>
			</td>
		</tr>
		<tr><!--Row 2-->
			<td>Did they call specific roles?</td>
			<td>
				<select name="position_dropdown_1">
					<option value="none">None</option>
					<option value="Top">Top</option>
					<option value="Middle">Middle</option>
					<option value="Carry">AD Carry</option>
					<option value="Support">Support</option>
					<option value="Jungle">Jungle</option>
				</select>
			</td>
			<td>
				<select name="position_dropdown_2">
					<option value="none">None</option>
					<option value="Top">Top</option>
					<option value="Middle">Middle</option>
					<option value="Carry">AD Carry</option>
					<option value="Support">Support</option>
					<option value="Jungle">Jungle</option>
				</select>
			</td>
			<td>
				<select name="position_dropdown_3">
					<option value="none">None</option>
					<option value="Top">Top</option>
					<option value="Middle">Middle</option>
					<option value="Carry">AD Carry</option>
					<option value="Support">Support</option>
					<option value="Jungle">Jungle</option>
				</select>
			</td>
			<td>
				<select name="position_dropdown_4">
					<option value="none">None</option>
					<option value="Top">Top</option>
					<option value="Middle">Middle</option>
					<option value="Carry">AD Carry</option>
					<option value="Support">Support</option>
					<option value="Jungle">Jungle</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>
				<h2>I want champs that: </h2>
			</td>
		</tr>
		<tr><!--Row 3-->
			<td>
				Have hard CC <br>
				Are Easy to Play <br>
				Work well with my team <br>
			</td>
			<td>
				<input type="checkbox" name="check_list[]" value="CC"> <br>
				<input type="checkbox" name="check_list[]" value="Difficulty"> <br>
				<input type="checkbox" name="check_list[]" value="WWW"> <br>
			</td>
		</tr>
		<tr><!--Row 4-->
			<td>
				<input type="submit" value="What champion should I play?">
			</td>
		</tr>
	</table>
</form>

<table>
	<tr>
		<td>
			<h3>Details</h3>
		</td>
		<td>
			<h3>Results</h3>
		</td>
	</tr>
	<tr>
		<td>
			<iframe width="500" height="200" name="detailsFrame" frameborder="1"></iframe>
		</td>
		<td>
			<iframe width="500" height="200" name="resultsFrame" frameborder="1"></iframe>
		</td>
	</tr>
</table>


</body>
</html>