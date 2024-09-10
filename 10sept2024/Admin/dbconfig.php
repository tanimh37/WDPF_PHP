<?php
define("HOST","localhost:3310") ;
define("USR", "root") ;
define("PASS","");
define("database" ,"wdpf_hospital");


$db = new mysqli();

@$db->connect(HOST,USR,PASS);

$db->select_db(database);
if($db->connect_errno) {
    echo $db->connect_error ;
    exit();
}
echo $db->error;
?>
