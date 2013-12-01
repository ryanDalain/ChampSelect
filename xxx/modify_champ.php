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
		
		$query_data = mysql_query($queryOriginal) or die("Could not find Champion table");
        
        ?>

<br>

<form action="modify_champ_results.php" method="post">

<table>
	<tr>
		<td>
			New Champ name:
		</td>
		<td>
			Select Champ from list:
		</td>
	</tr>
	<tr>
		<td>
			<input type="text" name="name"> OR 
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

Champion Difficulty <br>
<input type="number" name="difficulty" min="1" max="10" value="5"> <br> <br>

Champion Win Rate (As real number range:0-100) <br>
Note: invalid numbers will be set to 0 in the DB <br>
<input type="text" name="win_rate"> <br> <br>

<input type="submit" name="modify" value="Add new champion"> <br>
<input type="submit" name="modify" value="Delete champion"> <br>
<input type="submit" name="modify" value="Modify champion stats"> <br>
</form>


</body>
</html>