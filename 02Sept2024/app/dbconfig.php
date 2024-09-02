<?php
define("HOST","localhost:3306") ;
define("USR", "root") ;
define("PASS","");
define("DATABASASE" ,"wdpf60");


$db = new mysqli();

@$db->connect(HOST,USR,PASS);

$db->select_db(DATABASASE);
if($db->connect_errno) {
    echo $db->connect_error ;
    exit();
}
echo $db->error;
?>
