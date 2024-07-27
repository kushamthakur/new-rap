<?php
include 'con.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];

    $sql = "DELETE FROM users WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<body>

<h2>Delete User</h2>
<form method="post" action="">
  ID:<br>
  <input type="text" name="id" required>
  <br><br>
  <input type="submit" value="Submit">
</form> 

</body>
</html>
