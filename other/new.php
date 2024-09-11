<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
echo "<br>";
echo "hello world<br>", " this is from echo" ."<br>";

/* print "this is from print", "hello world";
hjgkjhc*/

// variables
$_abc="hello world";
echo $_abc;

// variable scope
// Local scope
// global scope
//Static scope

// local scope 
$a=23;
function test(){
    $a=10;
    echo $a;
    echo "<br>";
}
echo $a;
test();
echo "<br>";


// global scope
$a=23;
function test1(){
    global $a;
    echo $a;
}
echo $a;
test1();
echo "<br>";

//static scope
function test3(){
    static $a=0;
    echo $a;
    ++$a;
}
test3();
test3();
test3();
test3();
test3();
test3();

?>




</body>
</html>