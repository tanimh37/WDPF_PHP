<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
if (isset($_POST['submit'])) {
    $email =$_POST["email"] ;
    $pass = $_POST["password"] ;

    if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        echo "Email id Invalid" ;
    } elseif(strlen($pass)<6) {
        echo "Password Must be 6 digite" ;
    }

    else {
        echo "log in completed" ;
    }

}


?>




    <form action="" method="post">
        <input type="text" name="email" placeholder="enter your email"> <br>
        <input type="text" name="password" placeholder="enter your password">  <br>
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>