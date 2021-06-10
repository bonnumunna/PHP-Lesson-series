<?php
    // ========== PROCEDURAL CONNECTION TO MYSQL DATABASE =============
    
    define('HOST_SERVER', 'localhost');
    define('DATABASE', 'phplesson5');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');

    try{
        $conn = mysqli_connect(HOST_SERVER, DB_USERNAME, DB_PASSWORD, DATABASE);
        //mysqli_select_db($conn, DATABASE); // specify database to connect to
        if(mysqli_error($conn)){
            echo mysqli_errno($conn);
        }
    }catch(Exception $e){
        die($e);
    }

   
    
    ?>

