<?php
$personal_details=array("name" => "Rajesh Rao", "occupation" => "Engineer", "age" => 39, "country" => "India");

function ouf($x){
    foreach ( $x as $key => $value )
    {
    echo "$key=$value<br>";
    }}

ouf($personal_details);
?>