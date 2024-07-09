<?php

// if (! isset($_SERVER['PHP_AUTH_USER']) || ! isset($_SERVER['PHP_AUTH_
// PW'])) {
// header('WWW-Authenticate: Basic Realm="Authentication"');
// header("HTTP/1.1 401 Unauthorized");
// // If the username and password are set, output their credentials
// } else {
//     echo "Your supplied username: {$_SERVER['PHP_AUTH_USER']}<br />";
//     echo "Your password: {$_SERVER['PHP_AUTH_PW']}<br />";
//     }


$secret = sha1('abcd');
if (($_SERVER['PHP_AUTH_USER'] != 'client') ||
(hash('sha1', $_SERVER['PHP_AUTH_PW']) != $secret)) {
header('WWW-Authenticate: Basic Realm="Secret Stash"');
header('HTTP/1.0 401 Unauthorized');
print('You must provide the proper credentials!');
exit;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome joys bjsys</h1>
</body>
</html>