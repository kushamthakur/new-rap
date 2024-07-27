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
        $this->dbh = new mysqli($server, $un, $pass, $db);
        
    }

    function fetchAllData()
    {
        $stmt = $this->dbh->prepare("SELECT * FROM info");
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            echo "<table border='1'>";
            echo "<tr><th>ID</th><th>Name</th><th>City</th></tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row['id'] . "</td>
                        <td>" . $row['name'] . "</td>
                        <td>" . $row['city'] . "</td>
                      </tr>";
            }
            echo "</table>";
        } else {
            echo "No records found.";
        }
        $stmt->close();
    }

    function __destruct()
    {
        $this->dbh->close();
    }
}

$obj = new Dboops($server, $username, $psw, $dbname);
$obj->fetchAllData();

?>
