<?php

$transactions = array(
    array(
        "id" => 1,
        "name"=> "Gaby",
        "email"=> "gaby@codi.tech"
    ),
    array(
       "id" => 2,
       "name"=> "Omar",
       "email"=> "omar@codi.tech"
    )
);
for($i=0;$i<count($transactions);$i++){
    foreach($transactions[$i] as $key => $value){
        echo "$key = $value, ";
    }echo "<br>";   
}

?>