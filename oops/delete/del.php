<?php
// $server = 'localhost';
// $username = 'root';
// $psw = 'root';
// $dbname = 'data2';

class Dboops
{
    public $dbh;

    function __construct()
    {
        $this->dbh = new mysqli("localhost", "root", "root", "data2");
    }

    function deleteRecord($id) {
        $stmt = $this->dbh->prepare("DELETE FROM info WHERE id = $id");
       
        if ($stmt->execute()) {
            echo "Record successfully deleted";
        } 
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['id']) && is_numeric($_POST['id'])) {
    $id = $_POST['id'];
   
    $obj = new Dboops();
    $obj->deleteRecord($id);
} else {
    echo "Invalid request.";
}
?>