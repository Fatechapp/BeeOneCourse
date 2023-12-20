<?php
session_start();

// Database connection
$servername = "auth-db1031.hstgr.io";
$Username = "u931896070_BeeOneCourse";
$Password = "BeeOneCourse123.";
$database = "u931896070_BeeOneCourse";

$conn = new mysqli($servername, $Username, $Password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Login process
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Username = $_POST["Username"];
    $Password = $_POST["Password"];

    $sql = "SELECT * FROM User WHERE Username='$Username' AND Password='$Password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Login successful
        $_SESSION["Username"] = $Username;
        header("Location: dashboard.php"); // Redirect to a dashboard page
        exit();
    } else {
        // Login failed
        $error = "Invalid username or password";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1 initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!--TITLE-->
    <title>Login</title>

    <!--CSS-->
    <link rel="stylesheet" href="../style/login-style.css">

    <!--ICON-->
    <link rel="icon" href="../asset/bee-one-course-logo.ico">

    <!--FONT-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;700&display=swap" rel="stylesheet">

</head>
<body>
<div class="tombol-balik">
    <a href="choose-role.html"><img src="../asset/back-vector.png" alt=""></a>
</div>
<div class="container">
    <div class="kiri">
        <div class="icon-manager">
            <img src="../asset/teacher-login-icon.png" alt="">
        </div>
    </div>
    <div class="kanan">
        <h1>Welcome to BeeOne Course</h1>
        <div class="form">
            <form action="/login" method="post">
                <!--INPUT USERNAME-->
                <input class="input" type="text" id="username" name="username" placeholder="Email" required>

                <!--INPUT PASSWORD-->
                <input class="input" type="password" id="password" name="password" placeholder="Password" required>
                <input class="submit" type="submit" value="LOGIN">
            </form>
        </div>
        <div class="logo">
            <img src="../asset/bee-one-course-logo.png" alt="">
        </div>
    </div>
</div>
</body>
</html>
