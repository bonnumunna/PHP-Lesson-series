<?php
    if(!isset($_COOKIE['user']) && !isset($_COOKIE['user'])){
        header('location: index.php');
        // header('location: message.php?msg=You_are_not_logged_in');
    }
    $user = $_COOKIE['user'];
    $pass = $_COOKIE['pass'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page1</title>
</head>
<body>
    <h1>Welcome <?php echo $user;?></h1>
    <h4>Your password is <?php echo $pass;?></h4>

    <br>
    <br>
    <?php
        // $_COOKIE['user'] = "John Doe";
    ?>
    <br>
    <button><a href="logout.php">LOGOUT</a></button>
</body>
</html>