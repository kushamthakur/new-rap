<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2> INSERT DATA IN DATABASE</h2>
    <form method="post" action="">
        Name: <input type="text" name="name" required><br><br>
        EMAIL: <input type="email" name="email" required><br><br>
        PASSWORD: <input type="password" name="password" required><br><br>
        <input type="submit" name="insert">
    </form>
</body>
</html>


<?php 
    $con=mysqli_connect("localhost","root","root","project2");
//   if($con){
//     echo "okay";
//   }

if(isset($_POST["insert"])){
    $name=$_POST["name"];
    $email=$_POST["email"];
    $password=$_POST["password"];

    $insert="INSERT INTO info (name,email,password) VALUES('$name','$email','$password')";
    $result=mysqli_query($con,$insert);
    if($result){
        echo "data inserted";
    }
}

    
    ?>