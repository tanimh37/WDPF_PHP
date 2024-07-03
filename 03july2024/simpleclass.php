<?php
class SimpleClass
{
    public $var = 'a default value<br>'; // public property declaration
    public const a="America<br>"; // private constant Declaration
 
    // public method declaration
    public function displayConst() {
        echo $this->var;
    }
}
        $obj1 = new SimpleClass;
        echo $obj1->var;
        echo $obj1::a;                         //scope resulation
        $obj1->displayVar();
?>