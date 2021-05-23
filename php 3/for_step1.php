<?php  
$x = 14597;  
$sum=0; $rem=0;  
  for ($i =0; $i<=strlen($x);$i++)  
 {  
  $rem=$x%10;  
   $sum = $sum + $rem;  
   $x=$x/10;  
  }  
 echo "Sum of digits $num is $sum";  
 ?>  