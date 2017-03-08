<?php

function back_home(){
    echo '<li><a href="index.php">Tagasi algusse</a></li>';
}


function aeg() {
    date_default_timezone_set("Europe/Tallinn");
    $time = date("d.m.Y H:i:s");
    echo $time."<br>";
    if ($time > "13:14:50") {
        echo "Tund läbi";        
        } else {Echo "Peab kannatama";}
    
}

function menu(){
    $files = "array, functions, info";
    $menu_arr = explode(",",$files);
    for ($i=0; $i < count($menu_arr); $i++){
        echo '<li><a href="'.$menu_arr[$i]
        .'.php">'.$menu_arr[$i].'</a></li>';
    }
    
}

echo "Lisa";

?>