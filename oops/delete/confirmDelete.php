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
    function fetchdata($id)
    {
        $stmt = $this->dbh->prepare("SELECT * FROM info WHERE id = $id");
        
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            echo "<form method='POST' action='deleteData.php'>";
            while ($row = $result->fetch_assoc()) {
                echo "
                    <input type='hidden' name='id' value='" . $row['id'] . "'>
                    <p>Are you sure you want to delete the following record?</p>
                    <p>ID: " . $row['id'] . "</p>
                    <p>Name: " . $row['name'] . "</p>
                    <p>City: " . $row['city'] . "</p>
                    <input type='submit' name='submit' value='Delete'>
                ";
            }
            echo "</form>";
        } else {
            echo "No record found.";
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
    $obj->fetchdata($id);
} else {
    echo "Invalid ID.";
}
?>
