<?php

$states = array("Ohio", "Iowa", "Arizona", "Iowa", "Ohio");

echo"<pre>";
print_r($states);
$uniquestates = array_unique($states);
print_r($uniquestates);

?>