<?php

abstract class parentclass{
    abstract function calc($a, $b);
}
class childclass extends parentclass{

     public function calc($a,$b){
        echo $a + $b;
     }
}
$test= new childclass();
$test->calc(20,50)
?>