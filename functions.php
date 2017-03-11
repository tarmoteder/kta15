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
    $files = "array, functions, info, file, curl";
    $menu_arr = explode(",",$files);
    for ($i=0; $i < count($menu_arr); $i++){
        echo '<li><a href="'.$menu_arr[$i]
        .'.php">'.$menu_arr[$i].'</a></li>';
    }
    
}

function counter(){
    $file_name = 'count.txt';
    if (!file_exists($file_name)){
        $file =fopen($file_name,"w") or die("Pahasti");
        $count = 1;
        fwrite($file,$count);
        fclose($file);
    } else {
        $file =fopen($file_name,"r+") or die("Pahasti");
        $count = file_get_contents($file_name)+1;
        fwrite($file,$count);
        fclose($file);
        }
    echo "Olete külastaja nr: ".$count;
        
}

function GetIp(){
    $ip = $_SERVER['REMOTE_ADDR'];
    $file_name = 'visitor.txt';
    $time = date("d.m.Y H:i:s");
    $visitor = $ip." ".$time."\n";
    $file = fopen($file_name,'a') or die("Ei saanud avada");
    fwrite($file, $visitor);
    fclose($file);
    echo "Külastaj aadress on: ".$ip;
}

?>