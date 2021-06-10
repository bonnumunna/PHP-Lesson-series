<?php
    session_start();
    $username = $_SESSION['username'];
    $password = $_SESSION['password'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h1 align="center">Welcome to Login Class</h1>
    <a href="logout.php">Logout</a>
</body>
</html>