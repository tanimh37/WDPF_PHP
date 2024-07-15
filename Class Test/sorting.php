<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ans to the qs no -2</h1>
</body>
</html>

<?php 

$data = array(
    "Abdullah" =>"Cumilla",
    "Joys" => "Babu Bazar" ,
    "Nazrul" =>"Cumilla",
    "Romana" =>"Khulna",
    "Mustafizur" =>"Bhola"

) ;
 c


echo "<pre>" ;


print_r($data) ;
echo "<hr>" ;

ksort($data) ;

foreach($data as $student =>$district) {
    echo "$student  : $district <br>" ;
}

?>