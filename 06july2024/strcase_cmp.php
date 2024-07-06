<?php
$pswd = "supersecret";
$pswd2 = "suPeret2";


if (strcmp($pswd, $pswd2) != 0) {
echo "Passwords do not match!";
} else {
echo "Passwords match!";
}

echo "<hr>";
if(strcasecmp($pswd2, $pswd2) != 0) {
    echo "Pass Mactched";
} else {
    echo "Not Matched";
}


?>