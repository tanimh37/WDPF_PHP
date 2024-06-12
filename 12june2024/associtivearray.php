<?php
// numeric index array

$rivers = array("Padma"  , "megna" , "jamuna" , "surma") ;

echo "<pre>";
print_r($rivers);

$rivers[10] = "Tista";
$rivers[] = "Gumti";
print_r($rivers);

echo"<hr>";

// associative array

$capitals = ["Bangaladesh" =>"Dhaka", "Srilanka" =>"Colombo","Nepal" =>"Kathmondu", ] ;
$capitals["Bustan"] = "Thimpu";

print_r($capitals);
?>