<?php

$face = array("J", "Q", "K", "A");
$numbered = array("2", "3", "4", "5", "6", "7", "8", "9");
$cards = array_merge($face, $numbered);
echo"<pre>";
print_r($cards);

echo "<hr>";
shuffle($cards);
print_r($cards);

?>