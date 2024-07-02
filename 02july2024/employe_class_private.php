<?php

class employee {
    private $name ;
    public $age ;
    public $address ;
    protected $Phone ;
    protected $wage ;

    public function setName($name){
        $this->name = $name;
    }
    public function setWage($wage){
        $this->wage = $wage;
    }

    public function info() {
        $full = "" ;
        $full .= "Name:" . $this->name ."<br>" ;
        $full .= "age:" . $this->age ."<br>";
        $full .= "address:" . $this->address ."<br>";
        $full .= "Salary:" . $this->wage ."<br>";
        return $full ;
    }

} 
// end of class

 class Programmer extends Employee {
    public $wage =10000 ;
public function bonus($percent) {
    return $this->wage * $percent ;
}
 }

 
 $obj1 = new employee ;
//    $obj1->name ="Rahim" ;
 $obj1->setName("arif");
   $obj1->age = "20";
   $obj1->setWage(5000) ;
   $obj1->address = "Mirpur 12";

   echo $obj1->info() ;
 echo "<br>" ;
   $pro1 = new Programmer;
   echo "Salary: ". $pro1->wage .  "<br>" ;
   echo "Bonus". $pro1->bonus(".10");
?>