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

    public function validate_user($name, $fname) {
        // Prepare a select statement to prevent SQL injection
        $select = $this->dbh->prepare("SELECT * FROM info WHERE name = ? AND fname = ?");
        if ($select === false) {
            die("Prepare failed: (" . $this->dbh->errno . ") " . $this->dbh->error);
        }

        // Bind parameters
        $select->bind_param('ss', $name, $fname);

        // Execute the statement
        $select->execute();

        // Get the result
        $result = $select->get_result();

        // Check if user exists
        if ($result->num_rows > 0) {
            return true;
        } else {
            return false;
        }

        // Close the statement
        $select->close();
    }
}

if (isset($_POST['login'])) {
    // Posted values
    $name = $_POST['t1'];
    $fname = $_POST['t2'];

    $mydata = new Mydata();
    $is_valid = $mydata->validate_user($name, $fname);

    if ($is_valid) {
        echo "Login successful";
        // Redirect to a secure page or set session variables
    } else {
        echo "Invalid credentials";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <form action="ooplogin.php" method="post">
        <label>Name:</label>
        <input type="text" name="t1" required />
        <br><br>
        <label>Father Name:</label>
        <input type="text" name="t2" required />
        <br><br>
        <input type="submit" name="login" value="Login" />
    </form>
</body>
</html>
