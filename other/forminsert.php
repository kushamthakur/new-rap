
<!DOCTYPE html>
<html>
<body>

<h2>Create User</h2>
<form action="" method="post">
  Name:<br>
  <input type="text" name="name" required>
  <br>
  Email:<br>
  <input type="email" name="email" required>
  <br>
  Contact:<br>
  <input type="tel" name="contact" required>
  <br>
  Password:<br>
  <input type="Password" name="password" required>
  <br><br>
  <input type="submit" name="submit">
</form> 

</body>
</html>



<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "excellence";

$conn = mysqli_connect($servername, $username, $password, $dbname);


if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $password=$_POST['password'];

    $abc="SELECT email FROM users WHERE email='$email'";
    $rs=mysqli_query($conn,$abc);
    $pq=mysqli_num_rows($rs);
    if($pq){
        echo "email already existed";
    }else{

    $sql ="INSERT INTO users (name, email, password, contact) VALUES ('$name', '$email','$password', '$contact')";
    $res=mysqli_query($conn,$sql);
    if($res){
        header('location:loginForm.php');
    }else{
        echo "unsccessful";
    }
}
}
?>


