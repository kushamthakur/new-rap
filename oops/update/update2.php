<?php

$server = 'localhost';
$username = 'root';
$psw = 'root';
$dbname = 'data';

class Dboops
{
    public $dbh;

    function __construct($server, $un, $pass, $db)
    {
        $con = mysqli_connect($server, $un, $pass, $db);
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            exit();
        }
        $this->dbh = $con;
    }

    function updatesetvalues($id, $name, $city)
    {
        // Using prepared statements to prevent SQL injection
        $stmt = $this->dbh->prepare("UPDATE info SET name = ?, city = ? WHERE id = ?");
        $stmt->bind_param("ssi", $name, $city, $id);
        if ($stmt->execute()) {
            echo "Successfully updated";
        } else {
            echo "Error updating record: " . $stmt->error;
        }
        $stmt->close();
    }

    function __destruct()
    {
        $this->dbh->close();
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['id']) && isset($_POST['name']) && isset($_POST['city'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $city = $_POST['city'];

    $obj = new Dboops($server, $username, $psw, $dbname);
    $obj->updatesetvalues($id, $name, $city);
} else {
    header("Location: updateOOP.php");
    exit();
}

?>
