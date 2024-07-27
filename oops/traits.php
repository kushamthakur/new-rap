<?php

trait trait1{
    public function msg1(){
        echo "hello world";
    }
}
trait trait2{
    public function msg2(){
        echo "This is my world";
    }
}

class class1{
    use trait1;
    use trait2;
}
class class2{
    use trait1, trait2;
}

$obj= new class1();
$obj->msg1();
echo "<br>";
$obj->msg2();
echo "<br>";

$obj2= new class2();
$obj2->msg1();
echo "<br>";
$obj2->msg2();

?>