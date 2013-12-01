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
		$queryroles = "SELECT DISTINCT(role_Name) FROM role";
		
		$query_data = mysql_query($queryOriginal) or die("Could not find Champion table");
		$query_data2 = mysql_query($queryroles) or die("Could not find role table");
        
        ?>

<br>

<form action="modify_role_results.php" method="post">

<table>
	<tr>
		<td>
			Select role from list:
		</td>
		<td>
			Select Champ from list:
		</td>
	</tr>
	<tr>
		<td>
			<select name="role_dropdown">
			<?php

				while($info = mysql_fetch_array( $query_data2 )) 
				{
						Print "<option value = \"{$info['role_Name']}\">{$info['role_Name']}</option>";
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

<input type="submit" name="modify" value="Add role"> <br>
<input type="submit" name="modify" value="Delete role"> <br>
<input type="submit" name="modify" value="Modify role"> <br>
</form>

<br> <br> <a href="backend.php">Backend page</a> <br> <br>

</body>
</html>