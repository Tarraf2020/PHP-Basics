<?php

$transactions = array(
    array(
        "id" => 1,
        "debit"=>2,
        "credit"=>3
    ),
    array(
        "id" => 2,
        "debit"=>15,
        "credit"=>10
    )
);

// foreach($transactions as list(list($a, $b, $c))){
//     echo $a, $b, $c;
// }

foreach($transactions as $key => $value){
    print_r($value) . "<br/>";
  }

?>