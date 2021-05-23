<?php

$var1 = 32;
$var2 = 45;

function swap($x,$y){
    $c=$x;
    $x=$y;
    $y=$c;
    echo "$x $y";

}
swap($var1,$var2);
?>