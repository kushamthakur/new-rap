<?php

class Fruit{
    public $name;
    public $color;

   public function __construct($name,$color){
        $this->name=$name;
        $this->color=$color;
   }
//   public function intro(){
//         echo "This fruit is {$this->name} and the color is {$this->color}";
//     }


    protected function intro(){
        echo "this fruit is {$this->name} and the color is {$this->color}";
    }
}
// child class
class Apple extends Fruit{
    function msg(){
        echo "Am i a fruit". "<br>";
        $this->intro();
    }
}

$apple= new Apple("banana", "yellow");
$apple->msg();
// echo "<br>";
// $apple->intro();
?>