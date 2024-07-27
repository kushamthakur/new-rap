<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "excellence";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// $conn=mysqli_connect("localhost","root","root","excellence");

// if(isset($_POST['submit'])){
//     $name=$_POST['name'];
//     $email=$_POST['email'];
//     $contact=$_POST['contact'];
//     $password=$_POST['password'];
// // email already exist 
// $result="SELECT email FROM users WHERE email='$email'";
// $total_query=mysqli_query($conn,$result);
// $total=mysqli_num_rows($total_query);
// if($total==true){
//     echo "Email Already Existed";
// }
// }

// else{

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $password=$_POST['password'];

    $sql ="INSERT INTO users (name, email, password, contact) VALUES ('$name', '$email','$password', '$contact')";
    $res=mysqli_query($conn,$sql);
    if($res){
        header('location:loginForm.php');
    }else{
        echo "unsccessful";
    }
}
?>


