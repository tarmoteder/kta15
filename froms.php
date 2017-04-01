<?php

include 'db.php';

var_dump($_POST);
var_dump($_GET);

?>

<!DOCTYPE html>
<html>
<head>
	<title>GET ja POST meetodid</title>
</head>
<body>
<form action='' method="post"> 
	<ul>
		<li>
		<label for = "klassi_nr">Klassi number</label>
		<input type="text" name="klassi_nr">
		<label for = "korrus">Korrus</label>
		<input type="text" name="korrus">
		<label for = "korpus">Korpus</label>
		<input type="text" name="korpus">
		<label for = "arvutiklass">Arvutilkass (0/1)</label>
		<input type="text" name="arvutiklass">
		<label for = "6petaja">Õpetaja nimi</label>
		<input type="text" name="6petaja">
		</li>
		<?php my_insert_button($conn) ?>
		<li>
		<?php show_all_button($conn); ?>
		</li>
		<li>
		<label for = "PARAM">Parameeter</label>
		<input type="text" name="PARAM">
		<label for = "ID">Parameeter</label>
		<input type="text" name="ID">
		</li>
		<?php delete_button($conn); ?>
		<li>

	</ul>
</form>

<form action='' method="get"> 
	<ul>
		<li>
		<label for = "6petaja">Õpetaja nimi</label>
		<input type="text" name="6petaja">
		</li>
		<li>
		<?php search_by_button($conn) ?>
		</li>
	</ul>
</form>


</body>
</html>

