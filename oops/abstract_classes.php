<?php

abstract class Car{
    public $name;
    public function __construct($name){
        $this->name=$name;
    }
    abstract public function intro();
}
// child class 

class childclass extends Car{
    public function intro(){
        return "okay i am a $this->name" . " car";
    }
}
class childclass2 extends Car{
    public function intro(){
        return " and i am a $this->name " ." car";
    }
}
$obj=new childclass("volvo");
echo $obj->intro();
echo "<br>";

$obj2=new childclass2("swift");
echo $obj2->intro();
?>