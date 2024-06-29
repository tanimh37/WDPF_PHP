<?php

 $countris = array (
    "Bangladesh"=> "Dhaka",
    "Srilanka"=> "Colombo",
    "Uganda"=> "Kampala",
    "Nepal"=> "Kathmondo",
    "Maldives"=> "Maley",
 ) ;

 while($item  = key($countris)) {
    echo $item . "<br>";

    next($countris) ;
 }

?>