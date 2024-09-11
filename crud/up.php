<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form  method="post">
        <input type="text" name="id" placeholder="Enter Your id">
        <input type="text" name="name" placeholder="Enter Your name">
        <input type="email" name="email" placeholder="Enter Your email">
        <input type="password" name="password" placeholder="Enter Your password">
        <input type="submit" name="update" value="update">
        <input type="submit" name="delete" value="delete">
        <input type="submit" name="read" value="read">
    </form>

</body>
</html>

<?php

$servername="localhost";
$username="root";
$password="root";
$database="db1";

$con=mysqli_connect($servername,$username,$password,$database);

// $con=mysqli_connect("localhost","root","","db1");

if(isset($_POST['update'])){

    if (!empty($_POST['id']) && !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password'])) {

    $id=$_POST['id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    
$update="UPDATE tb1 SET name='$name', email='$email', password='$password' where id='$id'";
$result=mysqli_query($con,$update);
if($result){
    echo "data updated succsessfully";
}
}else{
    echo "id,name,email,password required";
}
}


// for delete data

if(isset($_POST['delete'])){
    if(!empty($_POST['id'])){
    $id=$_POST['id'];
   
$delete="DELETE FROM tb1 WHERE id='$id'";
$result=mysqli_query($con,$delete);
if($result){
    echo "data deleted succsessfully";
}else{
    echo "can't find id";
}
}else{
    echo "id is required";
}
}




// for read data

if(isset($_POST['read'])){

  $read="SELECT * FROM tb1";
  $result=mysqli_query($con,$read);
  if($result){
    echo "<table border='1'>
    <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Password</th>
    ";
    while($row=$result->fetch_assoc()){
        echo "<tr>
        <td>" .$row['id']."</td>
        <td>" .$row['name']."</td>
        <td>" .$row['email']."</td>
        <td>" .$row['password']."</td>
        </tr>";
    }
    echo "</table>";
  }
}
?>


