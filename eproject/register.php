<?php include("db.php"); ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    if (mysqli_query($conn, $query)) {
        $success = "Registered successfully!";
    } else {
        $error = "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>

</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>

    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #121212; 
    color: #e0e0e0; 
    display: flex;
    flex-direction: column;
    min-height: 100vh;
}

/* Navbar ki Styling */
.navbar {
    width: 100%;
    background-color: #0f0f0f;
    color: #00ff88; 
    padding: 15px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: fixed;
    top: 0;
    left: 0;
    box-shadow: 0 2px 10px rgba(0, 255, 136, 0.2);
    z-index: 100;
}

.logo {
    font-size: 24px;
    font-weight: bold;
    color: #00ff88;
}

.nav-links {
    display: flex;
    gap: 20px;
}

.nav-links a {
    text-decoration: none;
    color: #00ff88;
    font-size: 16px;
    padding: 10px 15px;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.nav-links a:hover {
    background-color: #1e1e1e;
}

/* Main  Content = main div*/
main {
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 100px 20px 20px;
    min-height: 100vh;
}


/* Form ki Styling */
form {
    background-color: #1e1e1e;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 0 15px rgba(0, 255, 136, 0.1);
    margin: 100px auto;
    max-width: 350px;
    height: 50vh;
    width: 100%;
}

form h2 {
    margin-bottom: 20px;
    color: #00ff88;
    text-align: center;
}

/* Input wali jagah */
input[type="text"],
input[type="password"],
input[type="file"] {
    width: 290px;
    padding: 12px;
    margin: 10px 0;
    border: 1px solid #333;
    border-radius: 5px;
    background-color: #2a2a2a;
    color: #e0e0e0;
    font-size: 16px;
    transition: border-color 0.3s ease;
}

input[type="text"]:focus,
input[type="password"]:focus,
input[type="file"]:focus {
    border-color: #00ff88;
    outline: none;
}

/* Button */
button {
    width: 100%;
    padding: 12px;
    background-color: #00ff88;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    color: #000000;
    cursor: pointer;
    transition: background-color 0.3s ease;
}
#cl{
    text-decoration: none;
    color: #000000;
}

button:hover {
    background-color: #00cc6a;
}

/* Table ki Styling */
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    background-color: #1e1e1e;
    color: #e0e0e0;
}

th, td {
    padding: 12px;
    text-align: left;
    border: 1px solid #333;
}

th {
    background-color: #00ff88;
    color: #000000;
}

tr:nth-child(even) {
    background-color: #2a2a2a;
}

tr:hover {
    background-color: #333333;
}

/* thori si responsive hai */
@media (max-width: 768px) {
    .navbar {
        flex-direction: column;
    }

    .nav-links {
        flex-direction: column;
        gap: 10px;
    }

    form {
        width: 90%;
        margin: 20px auto;
    }
}
</style>
<body>

<div class="navbar">
    <div class="logo">shantify</div>
    <div class="nav-links">
        <a href="login.php">Login</a>
        <a href="help.php">Help</a>
        <a href="index.php">Home</a>
    </div>
</div>

<form method="POST">
    <h2>Signin</h2>
    <?php if (isset($success)) echo "<p style='color: lightgreen; text-align:center;'>$success</p>"; ?>
    <?php if (isset($error)) echo "<p style='color: red; text-align:center;'>$error</p>"; ?>
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Signin</button>
    <p>Already have an account? <a href="login.php">Login</a></p><br>
    <button type="submit" style="background-color:white"><a href="https://accounts.google.com/v3/signin/identifier?authuser=0&continue=https%3A%2F%2Fwww.google.com%2F&ec=GAlAmgQ&hl=en&flowName=GlifWebSignIn&flowEntry=AddSession&dsh=S1681347285%3A1746527465666181" id="cl">Continue With Google<i class="fa-brands fa-google"></i></a></button>

</form>

</body>
</html>
