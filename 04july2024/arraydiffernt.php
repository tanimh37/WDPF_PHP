<?php

$array1 = array("OH", "CA", "NY", "HI", "TCLK");
$array2 = array("OH", "CA", "HI", "NY", "IA");                                      //prothome jeta thakbe setae base
$array3 = array("TX", "MD", "NE", "OH", "HI");
$diff = array_diff($array1, $array2, $array3);


print_r($diff);

?>