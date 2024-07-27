
<?php
session_start();

class Mydata {
    public $dbh;

    function __construct() {
        // Database connection parameters
        $host = 'localhost';
        $username = 'root';
        $password = 'root';
        $dbname = 'data2';

        // Attempt to connect to the database
        $this->dbh = new mysqli($host, $username, $password, $dbname);

        // Check connection
        if ($this->dbh->connect_error) {
            die("Failed to connect to MySQL: " . $this->dbh->connect_error);
        }
    }

    public function insert($name, $fname) {
        // Prepare an insert statement to prevent SQL injection
        $insert = $this->dbh->prepare("INSERT INTO info (name, fname) VALUES (?, ?)");
        if ($insert === false) {
            die("Prepare failed: (" . $this->dbh->errno . ") " . $this->dbh->error);
        }

        // Bind parameters
        $insert->bind_param('ss', $name, $fname);

        // Execute the statement
        if ($insert->execute()) {
            return true;
        } else {
            echo "Execute failed: (" . $insert->errno . ") " . $insert->error;
            return false;
        }

        // Close the statement
        $insert->close();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>CRUD Operations</title>
</head>
<body>
    <form action="newoops_crud.php" method="post">
        <label>Name:</label>
        <input type="text" name="t1" required />
        <br><br>
        <label>Father Name:</label>
        <input type="text" name="t2" required />
        <br><br>
        <input type="submit" name="submit" value="Submit" />
    </form>
            <br><br>

    <?php
    if (isset($_POST['submit'])) {
        // Posted values
        $name = $_POST['t1'];
        $fname = $_POST['t2'];

        $insertdata = new Mydata();
        $sql = $insertdata->insert($name, $fname);

        if ($sql) {
            echo "Inserted successfully";
        } else {
            echo "Unsuccessful insertion";
        }
    }
    ?>
</body>
</html>
