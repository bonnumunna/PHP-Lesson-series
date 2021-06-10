<?php 
    $connection = mysqli_connect('localhost', 'root', '', 'userbase');

    if(mysqli_connect_errno($connection)){
        die('ERROR!!!').mysqli_connect_error();
        // echo "ERROR!!!".mysqli_connect_error();
        // exit();
    }
?>