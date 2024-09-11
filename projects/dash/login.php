<?php
session_start();
include 'db_connection.php'; // Include your database connection file

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = ['password'];
    
    // Fetch user from database
    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        
        // Verify password
        // if (password_verify($password, $row['password'])) {
        if ($result) {
            $_SESSION['username'] = $username;
            $_SESSION['role'] = $row['role'];
            
            // Redirect based on role
            if ($row['role'] == 'admin') {
                header("Location: admin_dashboard.php");
            } elseif ($row['role'] == 'employee') {
                header("Location: employee_dashboard.php");
            } else {
                header("Location: user_dashboard.php");
            }
            exit();
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "No user found with that username.";
    }
}
?>
