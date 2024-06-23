<?php
//  $fruits = ["mango" , "Banana" , "Lichi" , "Jackfruit"] ;

// list($var1,$var2,$var3,$var4) = $fruits ;

// echo $var1 . "<br>";
// echo $var3 . "<br>";
// echo $var4 ;

function retrieveUserProfile()
{
$user[] = "Joys Bhai" . "<br>";
$user[] = "joys@condom.com" . "<br>";
$user[] = "English";
return $user;
}
list($name, $email, $language) = retrieveUserProfile();
echo "Name: {$name} email: {$email} language: {$language}";

?>