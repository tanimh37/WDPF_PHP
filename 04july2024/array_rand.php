<?php
$states = array("Ohio" => "Columbus", "Iowa" => "Des Moines",
"Arizona" => "Phoenix");
$randomStates = array_rand($states ,3);

echo"<pre>";
print_r($randomStates);

?>