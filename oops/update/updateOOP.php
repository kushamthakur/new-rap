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
        $con = new mysqli($server, $un, $pass, $db);
        if ($con->connect_error) {
            die("Connection failed: " . $con->connect_error);
        }
        $this->dbh = $con;
    }

    function updatedata($id)
    {
        $stmt = $this->dbh->prepare("SELECT * FROM info WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            echo "<form method='POST' action='update2.php'>";
            while ($row = $result->fetch_assoc()) {
                echo "
                    <input type='hidden' name='id' value='" . $row['id'] . "'>
                    <label for='name'>Name:</label>
                    <input type='text' id='name' name='name' value='" . $row['name'] . "' required><br><br>
                    <label for='city'>City:</label>
                    <input type='text' id='city' name='city' value='" . $row['city'] . "' required><br><br>
                    <input type='submit' name='submit' value='Update'>
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

if (isset($_POST['id']) && is_numeric($_POST['id'])) {
    $id = $_POST['id'];
    $obj = new Dboops($server, $username, $psw, $dbname);
    $obj->updatedata($id);
} else {
    echo "Invalid ID.";
}
?>
