<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Retrieve form data and sanitize

 $name = $_POST['name'];

 $email = $_POST['email'];

 $phone = $_POST['phone'];

 $message = $_POST['message'];


    // Debugging: Print received data

//  echo "Name: $name<br>";

//  echo "Email: $email<br>";

//  echo "Phone: $phone<br>";

//  echo "Message: $message<br>";



 $stmt = $conn->prepare("INSERT INTO emp (name, email, phone, message) VALUES (?, ?, ?, ?)");

 if ($stmt === false) {

 die("Error preparing statement: " . $conn->error);

 }



 $stmt->bind_param("ssss", $name, $email, $phone, $message);



 if ($stmt->execute()) {

 echo "New record created successfully";

 } else {

 echo "Error: " . $stmt->error;

 }



 $stmt->close();

}


// Close the connection

$conn->close();

?>


<!DOCTYPE html>

<html lang="en">

<head>

 <meta charset="UTF-8">

 <meta name="viewport" content="width=device-width, initial-scale=1.0">

 <title>Contact Us</title>

<link rel="stylesheet" href="contact.css"></head>

<body>




 <nav>


<div class="logo">

 <img src="nike.png" alt="">

</div>

<ul>


<li>


<a href="index.html" ><span>Home</span></a>


</li>


<li><a href="about.html" target="_blank">About</a></li>


<li><a href="service.html"target="blank">Services</a></li>


<li><a href="#">Contact</a></li>


</ul>



</nav>

 <div class="contact-container">

 <div class="map-section">

<h1>Contact us</h1>

<div class="address">

 <p>Our Address</p>

 <p>123456 Moscow</p>

 <p>Lane Druzhby</p>

 <p>Building 47 Office 202</p>

</div>

 <div class="contact-info">
<p>Our Contacts</p>

<p>hello@name.com</p>
<p>+7 900 850 70 60</p>

</div>
 </div>

 <div class="form-section">

 <form  class="feedback-form" method="post">

<h2>Feedback Form</h2>
 <input type="text" name="name" placeholder="Name" required>

 <input type="email" name="email" placeholder="E-mail" required>

 <input type="tel" name="phone" placeholder="Phone">
 <textarea name="message" placeholder="Message" required></textarea>

 <button type="submit">SEND MESSAGE</button>

 </form>

 </div>

 </div>

 

</body>

</html>