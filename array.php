<?php

include "functions.php";

back_home();

$var = "Minu muutuja";

$massiiv = array("Nimi", 11, 11.2, 11.8, $var);

// print_r($massiiv);
echo "<br>";

//var_dump($massiiv);

for ($i=0; $i < count($massiiv); $i++){
    echo $massiiv[$i]."<br>";}

foreach ($massiiv as $element){
    echo $element."<br>";
}

$assoc_arry = array("esimene"=>"Brendt", "teine"=>"Juhan", "kolmas"=>"Maarja");

foreach ($assoc_arry as $key => $name){
    echo $name." on nimekirjas ".$key."<br>";
}
$mata = "matemaatika";
$esta = "eesti keel";
$kem = "keemia";


$hinneteleht = array(
        "Mari"=>array($mata => 4, $esta => 3, $kem => 4),
        "Jüri"=>array($mata => 3, $esta => 4, $kem => 3),
        "Juhan"=>array($mata => 2, $esta => 3, $kem => 3));

$hinded_id = array_keys($hinneteleht);
$hinded_nr = count($hinded_id);

for ($i=0; $i<$hinded_nr; $i++){
    echo '<strong>'.$hinded_id[$i].'</strong><br>';
    foreach ($hinneteleht[$hinded_id[$i]] as $aine => $hinne )
    { echo $aine." : ".$hinne."<br>"; }
}

$str = array("Meil", "on", "praegu", "5", "tund");
// print_r(explode(" ",$str));
echo implode(" ", $str);
?>