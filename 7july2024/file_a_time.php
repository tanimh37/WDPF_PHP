<?php
$file = 'files/user.txt';

echo ("Change Time: " . date("m-d-y g:i:sa" , filectime($file)) . " <br> ") ;


echo ("Accessed Time: " . date("m-d-y g:i:sa" , fileatime($file)) . " <br> ") ;


echo ("Modified Time: " . date("m-d-y g:i:sa" , filemtime($file)) . " <br> ") ;





?>