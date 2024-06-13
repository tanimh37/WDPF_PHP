

<a href="get_post.php?name=Masud&contact=88019112-05779&address=Savar,joysnagar">click here</a>

<?php
if(isset($_POST['subscribe'])){
    echo$_POST ['email'];
    echo'<br>';
    echo $_POST['pswd'];
}
// echo"<pre>";
// print_r($_GET) ;
// if(isset($_REQUEST['subscribe'])){
//     echo$_REQUEST ['email'];
//     echo'<br>';
//     echo $_REQUEST['pswd'];
// }

?>

<form action="" method="post">

Email address:<br />
<input type="text" name="email" size="20" maxlength="50" value="" placeholder="enter your email"/>  <br />

Password:<br />
<input type="password" name="pswd" size="20" maxlength="15" value="" placeholder="enter your password"/> <br />

<input type="submit" name="subscribe" value="subscribe!" />

</form>