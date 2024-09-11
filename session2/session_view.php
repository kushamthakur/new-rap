<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>session</title>
</head>
<body>
    <form method="POST">
    username:<input type="text" name="username"><br><br>
    password:<input type="text" name="password"><br><br>
    <input type="submit" name="submit">
    </form>

</body>
</html>
<?php
session_start();

if (!isset($_SESSION['submit'])) {
    if (isset($_POST['username']) && isset($_POST['password'])) 
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $pass;
        
        header('Location: session_view2.php');
        exit();
    }
} else {
    header('Location: session_view.php');
    exit();
}
?>