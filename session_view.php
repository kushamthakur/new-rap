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

if (!isset($_SESSION['usname'])) {
    if (isset($_POST['username']) && isset($_POST['password'])) 
    {
        $usname = $_POST['username'];
        $pass = $_POST['password'];
        $_SESSION['usname'] = $usname;
        $_SESSION['pass'] = $pass;
        
        
        header('Location: session_view2.php');
        exit();
    }
} else {
    header('Location: session_view.php');
    exit();
}
?>