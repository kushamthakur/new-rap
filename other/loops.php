<?php

//while loop

$a=1;
while($a<=10){
    echo $a."<br>";
    $a++;
    // echo "<br>";
}

// do while loop
$b=1;
do{
    echo $b."<br>";
    $b++;
}
while($b<=10);

// for loop

for($c=1;$c<=10;$c++){
    echo $c."<br>";
}

// foreach loop

$d=array("red","blue","black");
foreach($d as $x){
    echo $x."<br>";
}

// nested loop
for($c=1; $c<=1; $c++){         
    for($e=1; $e<=10; $e++){
        echo $e;
    }
    echo "<br>";
}



?>