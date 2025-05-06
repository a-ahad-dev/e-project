<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="navbar">
    <div class="logo">shantify</div>
    <div><h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2></div>
    <div class="nav-links">
        <a href="">Songs</a>
        <a href="">Artists</a>
        <a href="help.php">Help</a>
        <a href="logout.php">Logout</a>
    </div>
</div>




</html>
