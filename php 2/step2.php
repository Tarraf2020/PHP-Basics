<?php 

function greaterthat($x) {
     
     if($x>=10&&$x<=20){
        echo "$x is greater than 10";
     }else if($x>=20&&$x<=30){
        echo "$x is greater than 20";
     }else if($x>=30){
        echo "$x is greater than 30";
     }else{ echo "$x is smaller than 10"; }
}
 greaterthat(11);
?>