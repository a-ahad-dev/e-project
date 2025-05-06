<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

include("db.php");

// Fetch users from the database
$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);


?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


<h2>Admin Panel</h2>

 <!-- Navbar -->
 <div class="navbar">
        <div class="logo">shantify</div>
        <div class="nav-links">
  
                <a href="upload.php">Upload</a>


        </div>
    </div>

<!-- Display Users -->
<h3>Registered Users</h3>
<table>
    <tr>
        <th>Username</th>
    </tr>
    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row['username']; ?></td>
        </tr>
    <?php } ?>
</table>


</body>
</html>