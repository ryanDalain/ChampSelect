<html>
<body>


<form action="insert_champ_results.php" method="post">

Champion Name <br>
<input type="text" name="name">  <br>

Champion Difficulty <br>
<input type="number" name="difficulty" min="1" max="10" value="5"> <br>

Champion Win Rate (As real number range:0-100) <br>
Note: invalid numbers will be set to 0 in the DB <br>
<input type="text" name="win_rate"> <br>

<input type="submit" value="Insert Champion"> <br>

</form>

</body>
</html>