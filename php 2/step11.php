<?php

function IsPrime($n)
{
 for($x=2; $x<$n; $x++)
   {
      if($n %$x ==0)
	      {
		   return "This is not a Prime Number..... \n";
		  }
    }
  return "This is a Prime Number..\n";
   }
 echo  IsPrime(17);
?>