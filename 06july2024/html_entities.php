<?php
$advertisement = "Coffee at 'Cafè Française' costs $2.25.";
echo htmlentities($advertisement);
echo"<hr>";

$input = "I just can't get <<enough>> of PHP!";
echo htmlspecialchars($input);

?>