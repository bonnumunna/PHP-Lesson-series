<?php 
    $con = mysqli_connect("localhost", "root", "", "phplesson3");

    if(mysqli_connect_errno()){
        die("ERROR! ").mysqli_connect_error();
    }

    // CREATE TABLE
    /*
    $sql = "CREATE TABLE IF NOT EXISTS tweet(
        id INT(11) NOT NULL AUTO_INCREMENT,
        category VARCHAR(20) NOT NULL,
        author VARCHAR(30) NOT NULL,
        tweet TEXT NOT NULL,
        PRIMARY KEY(id)
    )";
    $query = mysqli_query($con, $sql);
    if($query){
        echo "Table Created";
    }else{
        echo "Table Not Created";
    }
    */

    // CHECK FOR FORM SUBMISSION
    if(isset($_POST['tweet'])){
        $cat = $_POST['cat'];
        $aut = $_POST['aut'];
        $tweet = $_POST['tweet'];

        $sql = "INSERT INTO tweet(category, author, tweet) VALUES('$cat', '$aut', '$tweet')";

        $query = mysqli_query($con, $sql);
        // CHECK IF DATA WAS INSERTED
        if($query){
            echo "data_inserted";
            exit();
        }else{
            echo "insert_error";
            exit();
        }
    }
    
    // CLOSE CONNECTION
    mysqli_close($con);
?>