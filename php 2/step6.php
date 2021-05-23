<?php

function wow($x){
    $y=0;
    for($i=0 ; $i<strlen($x) ; $i++){
        $y+=$x[$i];
    }
    return $y;
}
echo wow("12345");
?>