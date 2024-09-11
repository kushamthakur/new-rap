<?php
// include 'con.php';

$conn=mysqli_connect("localhost","root","root","excellence");

$sql = "SELECT id, name, email FROM users";
$result = $conn->query($sql);

if ($result->num_rows) {
    echo "<table border='1'>
    <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>".$row["id"]."</td>
        <td>".$row["name"]."</td>
        <td>".$row["email"]."</td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

?>

