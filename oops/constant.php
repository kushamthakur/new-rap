<?php
// class hello{
//     const msg="Thankyou for visiting excellence technology";
//     public function bye(){
//         echo self::msg;
//     }
// }
// $obj=new hello();
// $obj->bye();
// echo hello::msg;


class Abc{
    public static function message(){
        echo "hello world";
    }
}
class Xyz{
    public function message2(){
        Abc::message();
    }
}
$obj = new Xyz();
echo $obj->message2();
?>