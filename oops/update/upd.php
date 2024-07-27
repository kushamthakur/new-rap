<?php

class Dboops
{
    public $dbh;

    function __construct()
    {
        $this->dbh = new mysqli("localhost", "root", "root", "data");
    }

    function updatesetvalues($id, $name, $email)
    {
        $stmt = $this->dbh->prepare("UPDATE users SET name='$name', email='$email' WHERE id=$id");
    
        if ($stmt->execute()) {
            echo "Successfully updated";
        } else {
            echo "Error updating record: " . $stmt->error;
        }
    }
}

if (isset($_POST['submit'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    $obj = new Dboops();
    $obj->updatesetvalues($id, $name, $email);
} 

?>
