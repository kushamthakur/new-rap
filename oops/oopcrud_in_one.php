<?php

class Database {
    private $conn;

    public function __construct() {
        $this->conn = new mysqli("localhost", "root", "root", "data");
    }

    public function create($name, $city) {
        
        $sql = "INSERT INTO info (name, city) VALUES ('$name', '$city')";
        if ($this->conn->query($sql) === TRUE) {
            echo "New record created successfully";
        }
    }

    public function read() {
        $sql = "SELECT id, name, city FROM info";
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table border='1'><tr><th>ID</th><th>Name</th><th>City</th></tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["city"] . "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "0 results found";
        }
    }

    public function update($id, $name, $city) {
        
        $sql = "UPDATE info SET name='$name', city='$city' WHERE id='$id'";
        if ($this->conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } 
    }

    public function delete($id) {

        $sql = "DELETE FROM info WHERE id='$id'";
        if ($this->conn->query($sql) === TRUE) {
            echo "Record deleted successfully";
        } 
    }
}



if(isset($post['submit'])){
$id=$_post['id'];
$name = $_POST['name'];
$city = $_POST['city'];

$db = new Database();
$db->create($name, $city);
$db->read();
$db->update($id, $name, $city);
$db->delete($id);
}




// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     if (isset($_POST['create'])) {
//         $name = $_POST['name'];
//         $city = $_POST['city'];
//         $db->create($name, $city);
//     } elseif (isset($_POST['read'])) {
//         $db->read();
//     } elseif (isset($_POST['update'])) {
//         $id = $_POST['id'];
//         $name = $_POST['name'];
//         $city = $_POST['city'];
//         $db->update($id, $name, $city);
//     } elseif (isset($_POST['delete'])) {
//         $id = $_POST['id'];
//         $db->delete($id);
//     }
// }
?>

<!DOCTYPE html>
<html>
<head>
    <title>CRUD Operations</title>
</head>
<body>
    <form method="POST" action="">
        ID: <input type="text" name="id"><br><br>
        Name: <input type="text" name="name"><br><br>
        City: <input type="text" name="city"><br><br>
        <input type="submit" name="create" value="Create">
        <input type="submit" name="read" value="Read">
        <input type="submit" name="update" value="Update">
        <input type="submit" name="delete" value="Delete">
    </form> 
</body>
</html>
