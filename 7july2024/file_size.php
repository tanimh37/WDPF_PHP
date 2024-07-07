<?php

$path = 'files/lol.pdf';
$mb = filesize( $path )/1024/1024;
echo round( $mb,2) .'MB';
?>