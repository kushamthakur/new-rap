<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] != 'employee') {
    header("Location: login.php");
    exit();
}
echo "Welcome, Employee " . $_SESSION['username'];
?>
<a href="logout.php">Logout</a>
