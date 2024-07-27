<?php
$server = 'localhost';
$username = 'root';
$password = 'root';
$dbname = 'data';

// Create connection
$conn = new mysqli($server, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create operation
if (isset($_POST['create'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);

    $sql = "INSERT INTO info (name, city) VALUES ('$name', '$city')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Update operation
if (isset($_POST['update'])) {
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);

    $sql = "UPDATE info SET name='$name', city='$city' WHERE id='$id'";
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

// aaayyeyeeeeeeeeeee

// Delete operation
if (isset($_POST['delete'])) {
    $id = mysqli_real_escape_string($conn, $_POST['id']);

    $sql = "DELETE FROM info WHERE id='$id'";
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

// Read operation
$sql = "SELECT id, name, city FROM info";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>CRUD Operations</title>
</head>
<body>
    <h2>Create User</h2>
    <form method="POST" action="">
        Name: <input type="text" name="name" required><br><br>
        City: <input type="text" name="city" required><br><br>
        <input type="submit" name="create" value="Create">
    </form>

    <h2>Update User</h2>
    <form method="POST" action="">
        ID: <input type="text" name="id" required><br><br>
        Name: <input type="text" name="name" required><br><br>
        City: <input type="text" name="city" required><br><br>
        <input type="submit" name="update" value="Update">
    </form>

    <h2>Delete User</h2>
    <form method="POST" action="">
        ID: <input type="text" name="id" required><br><br>
        <input type="submit" name="delete" value="Delete">
    </form>

    <h2>Users List</h2>
    <?php
    if ($result->num_rows > 0) {
        echo "<table border='1'><tr><th>ID</th><th>Name</th><th>City</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["city"] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>
</body>
</html>
