<?php
    session_start();
    include('login.php');
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        // Instance op Login class to form an object of it
        $login = new Login($username, $password);
        // Obtain session variables
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        // Use login() method in the class
        $result = $login->login($username, $password);
        echo $result;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="form.php" method="post">
        <p>Username</p>
        <input type="text" name="username" id="">
        <br><br>
        <p>Password</p>
        <input type="password" name="password" id="">
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>