
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include_once("dbconfig.php") ;
session_start();
if(isset($_POST['submit'])) {
     $email = $_POST['email'];
     $password = $_POST['password'];
     $password = md5($password);
     $result = $db->query("SELECT * FROM users WHERE email='$email' AND Password ='$password'");
     $row = $result->fetch_assoc();
     
     if($result->num_rows==0){
        $_SESSION['login_err'] = "Email or Password may wrong,Please try again";
        header("Location: index.php");
     } else {
        $_SESSION['email'] = $email;
        $_SESSION['name'] = $row['fullname'];

        header("Location: dashboard.php");
     }
}
?>
</body>
</html>