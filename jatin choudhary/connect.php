<?php
   //Database connection
   $conn = new mysqli('localhost','root','','information');

   if(isset($_POST['submit'])){
    $name=$_POST['name']; 
    $email=$_POST['email'];
    $password=$_POST['password'];
    $contact=$_POST['contact'];
    $sql="INSERT INTO info(id,name, email,password,contact)VALUES('','$name','$email','$password','$contact')";
    $result=mysqli_query($conn,$sql);
    if($result){
        header("location:index.html");
        // echo "<script type='text/javascript'>
        // alert('data inserted succcesfully');
        // location='index.html';
        // </script>";

    }
   }


    

    //Database connection
    // $conn = new mysqli('localhost','root','','Loruki');
    // if ($conn->connect_error) {
    //     die('Connection Failed : '. $conn->connect_error);
    // }else{
    //     $stmt = $conn->prepare("insert into Loruki(Name, Company, Email)
    //     values(?, ?, ?)");
    //     $stmt->bind_param("sss", $Name, $Company, $Email);
    //     $stmt->execute();
    //     $result = $stmt->get_result();
    //     if ($result->num_rows > 0) {
    //     echo "registration successfully";
    //     }
    //     $stmt->close();
    //     $conn->close();
    // }        
