<?php
$fh = fopen("files/user.txt" , 'r') ;

echo fgets($fh) ;

while(!feof($fh)) {
    echo fgets($fh) . "<br>";
}

fclose($fh) ;


?>

<?php
$fh = fopen("files/user2.txt" , 'a') ;

fwrite($fh,'<br>Hello Everybody') ;
fclose($fh) ;

$fh = fopen("files/user.txt" , 'r') ;
while(!feof($fh)) {
    echo fgets($fh) . "<br>";           //for deleting any file for submitting
}

fclose($fh) ;
unlink('files/user2.txt') ;


?>