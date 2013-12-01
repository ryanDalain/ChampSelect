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
		
		$query_data1 = mysql_query($queryOriginal) or die("Could not find Champion table");
        	$query_data2 = mysql_query($queryOriginal) or die("Could not find Champion table");
        	$query_data3 = mysql_query($queryOriginal) or die("Could not find Champion table");
        	$query_data4 = mysql_query($queryOriginal) or die("Could not find Champion table");
        
        ?>

<br>

<form action="modify_www_results.php" method="post">

<table>
	<tr>
		<td>
			Select a Champion from the list:
		</td>

		<td>
			<select name="champ_dropdown_1">
			<?php

				while($info = mysql_fetch_array( $query_data1 )) 
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
			Select a Champion to ADD a pairing:
		</td>

		<td>
			<select name="champ_dropdown_2">
			<?php

				while($info = mysql_fetch_array( $query_data2 )) 
				{
					Print "<option value = \"{$info['Name']}\">{$info['Name']}</option>";
				}

			?>
			</select>
		</td>
	</tr>	
</table>

<input type="submit" name="modify" value="Add new pair"> <br>

<br>

<table>
	<tr>
		<td>
			Select a Champion to DELETE or MODIFY:
		</td>

		<td>
			<select name="champ_dropdown_3">
			<?php

				while($info = mysql_fetch_array( $query_data3 )) 
				{
					Print "<option value = \"{$info['Name']}\">{$info['Name']}</option>";
				}

			?>
			</select>
		</td>
	</tr>
</table>

<input type="submit" name="modify" value="Delete pair"> <br>

<br>

<table>
	<tr>
		<td>
			Select a Champion to MODIFY the above:
		</td>

		<td>
			<select name="champ_dropdown_4">
			<?php

				while($info = mysql_fetch_array( $query_data4 )) 
				{
					Print "<option value = \"{$info['Name']}\">{$info['Name']}</option>";
				}

			?>
			</select>
		</td>
	</tr>	
</table>


<input type="submit" name="modify" value="Modify pair"> <br>
</form>

<br> <br> <a href="backend.php">Backend page</a> <br> <br>

</body>
</html>

