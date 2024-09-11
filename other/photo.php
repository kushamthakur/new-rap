<form action="" method="post" enctype="multipart/form-data">
    <input type="text" name="name" placeholder="name"><br><br>
    <input type="email" name="email" placeholder="email"><br><br>
    <input type="text" name="contact" placeholder="contact"><br><br>
    <label for="gender">Gender:</label>
        <input type="radio" id="male" name="gender" value="male" required> Male
        <input type="radio" id="female" name="gender" value="female" required> Female<br><br>
    <label for="languages">Languages:</label>
        <input type="checkbox" id="language1" name="languages[]" value="English"> English
        <input type="checkbox" id="language2" name="languages[]" value="Hindi"> Hindi
        <input type="checkbox" id="language3" name="languages[]" value="Punjabi"> Punjabi<br><br>
    <input type="file" name="photo"><br><br>
    <input type="submit" name="submits">
    
</form>



<?php
$conn = mysqli_connect("localhost", "root", "root", "excellence");
$sql = "SELECT id, name, email, contact,gender,language, photo FROM img";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>
    <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Contact</th>
    <th>Gender</th>
    <th>Language</th>
    <th>Photo</th>
    </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>".$row["id"]."</td>
        <td>".$row["name"]."</td>
        <td>".$row["email"]."</td>
        <td>".$row["contact"]."</td>
        <td>".$row["gender"]."</td>
        <td>".$row["language"]."</td>
        <td><img src='{$row['photo']}' height='100px' width='100px'></td>
        </tr>";
    }
    echo "</table>";
}
?>

<?php
if(isset($_POST['submits'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $gender = $_POST['gender'];
    $languages = implode(',', $_POST['languages']);
    $filename = $_FILES['photo']['name'];
    $file_loc = $_FILES['photo']['tmp_name'];
    $location = "profile/" . $filename;

$conn = mysqli_connect("localhost", "root", "root", "excellence");
$insert = "INSERT INTO img (name,email,contact,gender,language,photo)VALUES('$name','$email','$contact','$gender','$languages','$location')";
$query = mysqli_query($conn,$insert);
move_uploaded_file($file_loc, $location);
if($query==true)
{
        header("location:photo.php");
//    echo "submitted";
}
}
?>