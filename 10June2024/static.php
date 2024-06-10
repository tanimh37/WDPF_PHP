<?php

function myTest() {
    static $x = 0;
    // echo $x;
    $x +=7;
    return $x;
  }
  
  echo myTest();
  myTest();
  myTest();
  myTest();

?>