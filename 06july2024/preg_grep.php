<?php
$foods = array("pasta", "steak", "fish", "potatoes" , "kabab" , "pizza");
$food = preg_grep("/p/", $foods);
echo"<pre>";
print_r($food);
?>