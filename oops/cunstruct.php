<?php

 class fruit{
    public $name;
    public $color;

    function __construct($name){
    $this->name=$name;
    }

    function __destruct(){
        echo $this->name;
        }
 }
  $obj= new fruit("apple");
  ?>


