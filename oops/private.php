<?php

class Fruit{

    private function intro($a){
        return $a+9;
    }
    function abc(){
      return $this->intro(20);
    }

}
$obj=new Fruit;
echo $obj->abc();