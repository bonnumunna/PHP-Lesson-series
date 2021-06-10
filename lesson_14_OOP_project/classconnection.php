<?php
    $connection = mysqli_connect('localhost', 'root','', 'blog');

    if(mysqli_connect_errno()){
        die('Error!: ').mysqli_connect_error();
    }
?>
