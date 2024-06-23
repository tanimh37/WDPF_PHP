<?php
    $date = file("user.txt") ;


    // echo "<pre>" ;

    // print_r($date);

    echo "<table border='10'>" ;
    echo "<tr><th>Name</th><th> Profession </th> <th> Color</th> </tr>" ;

    foreach($date as $item) {
        $line = explode("|", $item) ;
        list($name , $prof , $color) = $line ;
        echo "<tr><td>$name</td><td>$prof</td><td> $color</td></tr>" ;
        // echo "<pre>" ;
        // print_r($line) ;

        // print $item ."<br>" ;
    }
    echo"</table>" ;
?>