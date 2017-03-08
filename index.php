<script type="text/javascript">

// JS realtime clock, otsib asukohta divi järgi
window.onload = function(){
    (function(){
        var date = new Date();
        var time = date.getHours()+':'+date.getMinutes()+':'+date.getSeconds();
        document.getElementsByTagName('div')[0].innerHTML = "JS aeg: "+time;
        window.setTimeout(arguments.callee,2000);
    })();    
};

</script>

<?php

include "functions.php";
// näited muutujatest
$date ="08.03.2017";
$number = 5;
$float = 5.2;
$float1 = 5.18;

back_home();
menu();
echo "$date, kolmas tund<br>";

// näide liidestamisest
echo 'Esimene float on '.$float." ja teine on ". $float1.'<br>';

echo $float + $float1."<br>";


echo '<div></div>';
aeg();

?>
