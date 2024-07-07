<?php
$f = 'f:';

$free = disk_free_space( $f );
$total = disk_total_space( $f );

$used = $total - $free;

echo $used/1024/1024/1024;

// $f = 'f:' ;
// echo "<hr>" ;
// echo disk_free_space($f)/1024/1024/1024;
?>