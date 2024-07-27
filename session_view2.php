<?php
session_start();

if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header('Location: session_view.php');
    exit();
}

if (isset($_SESSION['usname']) && isset($_SESSION['pass'])) {
    echo 'Username: ' . $_SESSION['usname'] . '<br>';
    echo 'Password: ' . $_SESSION['pass'] . '<br>';
} else {
    echo 'Session variables are not set.';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
</head>
<body>
    <form method="POST">
        <input type="submit" name="logout" value="Logout">
    </form>
</body>
</html>