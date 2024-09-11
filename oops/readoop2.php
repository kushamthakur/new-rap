<?php

class Abc{

    public $dbh;

    function __construct(){
        $this->dbh=new mysqli('localhost','root','root','data');
 }
 function viewdata(){
    $my="select * from users";
    $sql=$this->dbh->query($my);
    if($sql){
        echo"<table border=1>
        <tr>
        <th>id</th>
        <th>name</th>
        <th>email</th>
        </tr>";
        while($row=$sql->fetch_assoc()){
            echo"<tr>
            <td>".$row['id']."</td>
            <td>".$row['name']."</td>
            <td>".$row['email']."</td>
            </tr>";
        }
        echo "</table>";
    }
 }
}

$obj=new Abc();
echo $obj->viewdata();
?>

