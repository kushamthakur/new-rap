<?php
 
  class Ab{
    public $cd;
    function __construct(){
        $this->cd=new mysqli('localhost','root','root','data');
    } 
    function insertdata($name,$email){
        $insert=$this->cd->prepare("INSERT INTO users (name,email)VALUES('$name','$email')"); 
        if($insert->execute()){
            return true;
        }
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
<form method="POST">
    <input type="text" name="name">
    <input type="email" name="email">
    <input type="submit" name="submit">
</body>
</html>

    <?php
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];

    $obj=new Ab();
    $sql= $obj->insertdata($name,$email);
    
    if ($sql) {
        echo "Inserted successfully";
    } else {
        echo "Unsuccessful insertion";
    }
} 

?>