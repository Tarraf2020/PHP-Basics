<?php

function magic($x){
  echo  $x == strrev($x)?"yes":"no";
}
magic("madam");
?>