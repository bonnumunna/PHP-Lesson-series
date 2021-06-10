<?php
    require_once('./includes/dbConnect.php');

    if(isset($_POST['register'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $sql = "INSERT INTO users(`username`, `password`) VALUES('$username', '$password')";
        if(mysqli_query($connection, $sql)){
            echo "Registeration Successful";
        } else{
            echo "There was a problem";
        }
    }
?>