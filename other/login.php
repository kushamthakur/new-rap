<?php

$conn=mysqli_connect("localhost","root","root","excellence");

if(isset($_POST['login'])){
 $email=$_POST['email'];
 $password=$_POST['password'];

 $query="SELECT * FROM users WHERE email='$email' AND password='$password'";
 $res=mysqli_query($conn,$query);
$total=mysqli_num_rows($res);
 if($total){
        echo "okay";
     
 }else{
   echo "data not found";
 }

}

?>