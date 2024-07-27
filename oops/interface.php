<?php

interface parent1{
    function add($a,$b);
}
interface parent2{
    function sub($c,$d);
}

class childclass implements parent1, parent2{
    public function add($a,$b){
        echo $a + $b;
    }
    public function sub($c,$d){
        echo $c - $d;
    }
}
$obj= new childclass();
$obj->add(10,30);
echo "<br>";
$obj->sub(50,30);
?>