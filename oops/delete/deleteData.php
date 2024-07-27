<?php
$server = 'localhost';
$username = 'root';
$psw = 'root';
$dbname = 'data2';

class Dboops
{
    public $dbh;

    function __construct($server, $un, $pass, $db)
    {
        $this->dbh = new mysqli($server, $un, $pass, $db);
        if ($this->dbh->connect_error) {
            die("Connection failed: " . $this->dbh->connect_error);
        }
    }

    function deleteRecord($id)
    {
        $stmt = $this->dbh->prepare("DELETE FROM info WHERE id = ?");
        $stmt->bind_param("i", $id);
        if ($stmt->execute()) {
            echo "Record successfully deleted";
        } else {
            echo "Error deleting record: " . $stmt->error;
        }
        $stmt->close();
    }

    function __destruct()
    {
        $this->dbh->close();
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['id']) && is_numeric($_POST['id'])) {
    $id = $_POST['id'];
    $obj = new Dboops($server, $username, $psw, $dbname);
    $obj->deleteRecord($id);
} else {
    echo "Invalid request.";
}
?>
