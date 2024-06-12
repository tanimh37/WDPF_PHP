<?php
class student
{
    public $name;
    public $age;
    function register($name, $age) 
    {
        $this->name = $name;
        $this->age = $age;
    }
}
$student1 = new student();
$student1->register("Masud" ,20);
print_r($student1);
?>
