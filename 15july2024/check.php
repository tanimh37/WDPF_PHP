<?php 

$userEmail = "abdullah@gmail.com" ;
$userPassword = "123456" ;

$email =  $_POST['email'] ;
$password =  $_POST['password'] ;

if($email == $userEmail && $password == $userPassword) {

    session_start() ;

$_SESSION['email'] = $email ;

header("location: homepage.php") ;

}  else {
    header("location: login.php") ;
}








?>