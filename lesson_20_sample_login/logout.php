<?php
    // session_start();
    // session_destroy();
    // UNSETTING COOKIES
    setcookie('email', $result['email'], strtotime('1 day ago') );
    setcookie('password', $result['password'], time()-3600 );
    header('Location: index.php');
    // if(isset($_SESSION['email'])){
    //     session_destroy();
    //     header('Location: index.php');
    // }else{
    //     header('Location: index.php');
    // }
?>