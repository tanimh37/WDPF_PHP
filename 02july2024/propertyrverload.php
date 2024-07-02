<?php
class Employee
{
public $name;
public function __set($propName, $propValue)
{
$this->$propName = $propValue;
}
}
$employee = new Employee;
$employee->name = "Abdullah Al Hossain";
$employee->phone = "01911205779";
echo "Name: {$employee->name}<br />";
echo "Phone: {$employee->phone}";
?>