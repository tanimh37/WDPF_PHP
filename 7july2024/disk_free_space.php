<?php
$drive = 'f:';

echo disk_free_space($drive)/1024/1024/1024;

$f = 'f:' ;
echo "<hr>" ;
echo disk_free_space($f)/1024/1024/1024;
?>