<?php
include 'con.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<body>

<h2>Create User</h2>
<form method="post" action="">
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
