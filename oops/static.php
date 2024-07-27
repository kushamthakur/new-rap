<?php

class Message{

    public static function welcome(){
        echo "hello world";
    }

    public function __construct(){
        self::welcome();
    }
}
message::welcome();
new Message();

?>