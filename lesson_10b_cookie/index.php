<?php
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        // echo $username ." ".$password;

        setcookie('user', $username, time()+86400);
        setcookie('pass', $password, strtotime('1 day'));
        // This line will relocate the user from
        // the current page to the state page (page1.php)
        header('Location: page1.php');

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COOKIE</title>
</head>
<body>
<h1>HANDLING COOKIES</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        Username:
        <input type="text" name="username" id="" placeholder="enter username">
        <br>
        Password:
        <input type="password" name="password" id="" placeholder="enter username">
        <br><br>
        <input type="submit" name="submit" value="SUBMIT">
    </form>
</body>
</html>