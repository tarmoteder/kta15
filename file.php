<?php

require 'functions.php';

back_home();

$file = fopen('tekst.txt',"a") or die("Ei saanud avada");

$txt = "Esimene tekst\n";
fwrite($file,$txt);
fclose($file);

echo nl2br(file_get_contents('tekst.txt'));





?>