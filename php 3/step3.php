<?php
$str = "Hello world. It's a world beautiful day.";

function why($word, $text){
    return count(explode($word,$text))-1;
}

echo why("world", $str);

?> 