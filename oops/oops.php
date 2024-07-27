<?php

class Abc{
    //properties
    public $a;
    public $b;
    public $c;

    //method
    function set_value($a,$b){
        $this->a=$a;
        $this->b=$b;
    }
    function get_value() {
        $this->c = $this->a + $this->b;
        echo $this->c;
    }
}
$obj=new Abc;
$obj->set_value(100,70);
 $obj->get_value();

// $obj2=new Abc;
// $obj2->set_value(200,70);
// echo $obj2->get_value();

?>