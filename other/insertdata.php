<?php

$servername="localhost";
$username="root";
$password="root";
$dbname="db1";

$con=mysqli_connect($servername,$username,$password,$dbname);
// if($con){
//     echo "connected";
// }

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    $insert="INSERT INTO tb1 (name,email,password)VALUES('$name','$email','$password')";
    $result=mysqli_query($con,$insert);
    if($result){
        echo "data inserted successfully";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  method="post">
        <input type="text" name="name" placeholder="Enter Your name">
        <input type="email" name="email" placeholder="Enter Your email">
        <input type="password" name="password" placeholder="Enter Your password">
        <input type="submit" name="submit">
    </form>
</body>
</html>