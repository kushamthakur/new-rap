<?php

$conn=mysqli_connect("localhost","root","","information");

if(isset($_POST['login'])){
 $email=$_POST['email'];
 $password=$_POST['password'];

 $query ="SELECT * FROM info WHERE email='$email' AND password='$password'";
 $res=mysqli_query($conn,$query);
$total=mysqli_num_rows($res);
if($total){
    //echo"okay you are login";
    header("location:management_system/index1.html ");
    exit;

}else{
    echo "data not found";
}

}

?>

<!-- <html>

<head>
      < <title>LOGIN</title> 
    <style>
        .img {
            background-image: url('images/login.png');
            height: 100vh;
            background-repeat: no-repeat;
            background-size: 100% 100%;
        }
        
        .img h1 {
            padding-top: 35px;
            color: white;
        }
    </style>
</head>

<body>
    <div class="img">
        <center>
            <h1>LOG IN</h1>
            <form method="post" action="login.php">
                <input type="email" placeholder="enter username" name="email" required><br><br>
                <input type="password" placeholder="enter password" name="password" required><br><br>
                <input type="submit" name="login">
                <button type="submit" name="submit" class="signupbtn">Log In</button> -->
        <!-- </center>
        </form>
    </div>
</body>

</html> --> 