<?php


$conn = new mysqli("localhost","root","");

function connect($conn){
	if (!$conn){
		die("Ühendus puudub".mysqli_connect_error());
	} else {echo "Ühendus on olemas<br>";}
}

connect($conn);

function show_all($conn){
	$sql = "SELECT * FROM test.klass";
	$result = $conn -> query($sql);

	if ($result -> num_rows > 0){
		while ($row = $result->fetch_assoc()){
			echo "<br> ID: ".$row["id"].
				" Klassi nr: ".$row["klassi_nr"].
				" Korrus: ". $row["korrus"].
				" Korpus: ". $row["korpus"].
				" Õpetaja: ". $row["6petaja"].
				" Aeg: ". $row["aeg"];
		}
	} else {echo "Sul on tühi baas, tee midagi asjalikku";}

} 

function search_by($conn){
	$sql = "SELECT * FROM test.klass WHERE 6petaja = '".$_GET['6petaja']."'";
	$result = $conn -> query($sql);

	if ($result -> num_rows > 0){
		while ($row = $result->fetch_assoc()){
			echo "<br> ID: ".$row["id"].
				" Klassi nr: ".$row["klassi_nr"].
				" Korrus: ". $row["korrus"].
				" Korpus: ". $row["korpus"].
				" Õpetaja: ". $row["6petaja"].
				" Aeg: ". $row["aeg"];
		}
	} else {echo "Sellist kirjet ei ole";}

} 



function my_insert($conn){
	$sql = "INSERT INTO test.klass (klassi_nr,korrus,korpus,arvutiklass,6petaja) VALUES ('".
		$_POST['klassi_nr']."','".
		$_POST['korrus']."','".
		$_POST['korpus']."','".
		$_POST['arvutiklass']."','".
		$_POST['6petaja']."')";

	$result = $conn -> query($sql);


}

function my_delete($conn){
	$sql = "DELETE FROM test.klass WHERE "
	.$_POST['PARAM']." = '".$_POST['ID']."'";
	echo $sql;
	$result = $conn -> query($sql);
}

// my_insert($conn);
//my_delete($conn);
// show_all($conn);

function show_all_button($conn){
	echo "<input type='submit' name='show_all' value='Näita kõiki'>";
	if(isset($_POST['show_all'])){
		show_all($conn);
	}
}

function search_by_button($conn){
	echo "<input type='submit' name='insert' value='Näita'>";
	if(isset($_GET['insert'])){
		search_by($conn);
	}
}

function my_insert_button($conn){
	echo "<input type='submit' name='insert' value='Sisesta kirje'>";
	if(isset($_POST['insert'])){
		my_insert($conn);

}}

function delete_button($conn){
	echo "<input type='submit' name='delete' value='Kustuta kirje'>";
	if(isset($_POST['delete'])){
		my_delete($conn);

}}


?>