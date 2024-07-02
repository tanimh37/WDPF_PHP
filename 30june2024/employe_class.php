<?php

class employee {
    public $name ;
    public $age ;
    public $address ;

    public function info() {
        $full = "" ;
        $full .= "Name:" . $this->name ."<br>" ;
        $full .= "age:" . $this->age ."<br>";
        $full .= "address:" . $this->address ."<br>";
        return $full ;
    }

}
 $obj1 = new employee ;
   $obj1->name ="Rahim" ;
   $obj1->age = "20";
   $obj1->address = "Mirpur 12";
   echo $obj1->info() ;
?>