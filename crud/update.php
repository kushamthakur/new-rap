<?php
include 'con.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "UPDATE users SET name='$name', email='$email' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<body>

<h2>Update User</h2>
<form method="post" action="">
  ID:<br>
  <input type="text" name="id" required>
  <br>
  Name:<br>
  <input type="text" name="name" required>
  <br>
  Email:<br>
  <input type="email" name="email" required>
  <br><br>
  <input type="submit" value="Submit">
</form> 

</body>
</html>
