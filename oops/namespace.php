<?php
require 'firstclass.php';
require 'secondclass.php';
function wow(){
    echo "wow from namespace file.";
    echo "<br>";
}

$obj= new test1\product();
$obj->wow();

$obj= new test2\product();
$obj->wow();
wow();
?>