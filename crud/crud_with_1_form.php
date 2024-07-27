<?php
$server = 'localhost';
$username = 'root';
$password = 'root';
$dbname = 'data';

// connection
$conn = mysqli_connect($server, $username, $password, $dbname);

// Create
if (isset($_POST['create'])) {
    if (!empty($_POST['name']) && !empty($_POST['city'])) {
        $name = $_POST['name'];
        $city = $_POST['city'];

        if (preg_match("/^[a-zA-Z]+$/", $name)) {
            $sql = "INSERT INTO info (name, city) VALUES ('$name', '$city')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
            echo "New record created successfully";
            } 
        } else {
        echo "Name must contain alphabetic characters only";
        } 
    } else {
        echo "Name and City fields are required for creation";
    }
}

// Update
if (isset($_POST['update'])) {
    if (!empty($_POST['id']) && !empty($_POST['name']) && !empty($_POST['city'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $city = $_POST['city'];

    $sql = "UPDATE info SET name='$name', city='$city' WHERE id='$id'";
    $result= mysqli_query($conn,$sql);
    if ($result) {
        echo "Record updated successfully";
    }
}else{
    echo "ID, Name, and City fields are required for update";
}
}
// Delete 
if (isset($_POST['delete'])) {
    if (!empty($_POST['id'])) {
    $id = $_POST['id'];

    $sql = "DELETE FROM info WHERE id='$id'";
    $result= mysqli_query($conn,$sql);
    if ($result) {
        echo "Record deleted successfully";
    }
}else{
    echo "ID field is required for deletion";
}
}
// Read 
if (isset($_POST['read'])) {
    if (!empty($_POST['name'])) {
        $name = $_POST['name'];
        $sql = "SELECT id, name, city FROM info WHERE name='$name'";
    } else {
        $sql = "SELECT id, name, city FROM info";
    }

    $result= mysqli_query($conn,$sql);
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


