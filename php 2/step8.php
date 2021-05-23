<?php

function pw2($n)
{

    echo $x = (($n & ($n - 1)) == 0)?"$n is power of 2<br>":"$n is not power of 2<br>";

}
pw2(4);
pw2(36);

?>