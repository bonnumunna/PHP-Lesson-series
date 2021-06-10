<?php
    if(isset($_COOKIE['user'])){
        $value = $_COOKIE['user'];
        setcookie('user', $value, time()-86400);
        setcookie('pass', $value, time()-86400);

        // setcookie('user', $value, strtotime('yesterday'));
        header('location: index.php');
    }
?>