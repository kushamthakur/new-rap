<?php

function abc($lastname,...$firstname){
    $a="";
    $len=count($firstname);
    for($i=0; $i<$len; $i++){
        $a= $a. $firstname[$i] .$lastname. "<br>";
    }
    return $a;
}
$b=abc("saini","rajinder ","parminder ","deepak ");
echo $b;
?>