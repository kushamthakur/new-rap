<!-- <?php
$n=5;
for($i=1;$i<=$n;$i++){
    for($j=1;$j<=(2*$n)-1;$j++){
       if($j>=$n-($i-1) && $j<=$n+($i-1)){
        echo "*";
       }else{
        echo "&nbsp;&nbsp;";
       }
    }
    echo "<br>";
}
?> 
<?php
$n=5;
for($i=1;$i<=$n;$i++){
    for($j=1;$j<=$i;$j++){
        echo "*";
    }
    echo "<br>";
}
for($i=1;$i<=$n;$i++){
    for($j=$n;$j>$i;$j--){
        echo "*";
    }
    echo "<br>";
}
?>-->
<?php
 
 for ($i=0; $i <=50; $i++) { 
 	
 	if($i%2==1){
 	echo "$i";
    }
    echo "<br>";
 }
	?>