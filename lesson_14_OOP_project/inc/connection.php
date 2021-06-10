<?php
    $connection = mysqli_connect('localhost', 'root', '', 'students');

    if(mysqli_connect_errno($connection)){
        echo "ERROR! ".mysqli_connect_error();
        exit();
    }
?>