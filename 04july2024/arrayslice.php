<?php


$states = array("Alabama", "Alaska", "Arizona", "Arkansas",
"California", "Colorado", "Connecticut");
// $subset = array_slice($states,4);
$subset = array_slice($states, 4 , -1);


echo"<pre>";
print_r($subset);

?>