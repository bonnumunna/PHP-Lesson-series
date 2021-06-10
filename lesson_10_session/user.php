<?php
    // START SESSION
    // session_start();

    // CHECK FOR SESSION
    // if(isset($_SESSION['user']) AND isset($_SESSION['pass'])){
    //     $username = $_SESSION['user'];
    //     $password = $_SESSION['pass'];

    // }else{
    //     header("location: home.php");
    // }

    // if(!isset($_SESSION['user'])){
    //     header("location: home.php");
    // }
    // $username = $_SESSION['user'];

    if(isset($_COOKIE['user']) AND $_COOKIE['pass']){
        $username = $_COOKIE['user'];
        $password = $_COOKIE['pass'];
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../bootstrap-4.6.0-dist/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <header class="bg-primary p-2 text-white">
        <h1 class="text-center">Welcome to User Enveronment</h1>
    </header>
    <div class="container">
        <h3>Username is: <?php echo $username; ?></h3>
        <h3>Password is: <?php echo $password; ?></h3>

        <a href="logout.php" class="btn btn-info float-right">LOGOUT</a>
    </div>
</body>

</html>