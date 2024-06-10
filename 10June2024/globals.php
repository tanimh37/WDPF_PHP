<?php
$x =5 ;
$y =10 ;

function mytest() {
    $x = 3; $y = 2;
    $y =$x + $y;
}

mytest();
echo $y ;

echo"<pre>";
print_r($GLOBALS) ;
?>