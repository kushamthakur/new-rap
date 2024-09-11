<?php
$a=array("red","blue","black");

var_dump($a);
 echo $a[2];
 echo "<br>";

 $b=array("color1"=>"red","color2"=>"blue","color3"=>"black");
 var_dump($b);
 echo $b["color3"];

 echo "<br>";
 $c=array(array("red","blue","black"),
          array("12",23,45),
          array("apple","banana","mango"));

var_dump($c);
 echo $c[1][2];
 
?>