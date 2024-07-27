<?php

class fruit{
    public $name;
    public $color;
    public $price;

    function __construct($name,$color,$price){
    $this->name=$name;
    $this->color=$color;
    $this->price=$price;
    }

    function __destruct(){
        echo $this->name . " is a fruit, it's color is " .$this->color . " and it's price is ". $this->price;
        // echo "<br>";
        // echo $this->color;
        }   
 }
  $obj= new fruit("apple", "red", "120");
  
?>