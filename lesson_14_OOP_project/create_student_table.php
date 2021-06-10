<?php
    // Include database connection
    include_once('./inc/connection.php');
    $sql = "CREATE TABLE IF NOT EXISTS student_table(
        id INT(11) NOT NULL AUTO_INCREMENT,
        `name` VARCHAR(255) NOT NULL,
        `email` VARCHAR(255) NOT NULL,
        `regNumber` VARCHAR(6) NOT NULL,
        `course` VARCHAR(255) NOT NULL,
        `registrationYear` DATETIME DEFAULT CURRENT_TIMESTAMP,
        `graduateStudent` ENUM('yes','no') DEFAULT 'yes',
        `payFees` ENUM('yes', 'no') DEFAULT 'yes',
        PRIMARY KEY(id)
    )";
    $query = mysqli_query($connection, $sql);
    if($query == true){
        echo "Student table created successfully";
    }else {
        echo "Table not created";
    }


    $name = "Richard Nixon";
    $email = "richard.nixon@us.gov";
    $regNumber = "zc0002";
    $course = "Software Engineering";
    $graduateStudent = "yes";
    $payFees = "no";

    // $sql = "UPDATE TABLE student_table SET `name`='$name', `email`='$email', `regNumber`='$regNumber',
    // `course`='$course', `graduateStudent`='$graduateStudent', `payFees`='$payFees'";

    $sql = "INSERT INTO student_table(`name`, `email`, `regNumber`, `course`, `graduateStudent`, `payFees`)
    VALUES('$name', '$email', '$regNumber', '$course', '$graduateStudent', '$payFees')";

    $query = mysqli_query($connection, $sql);
    if($query == true){
        echo "Insert successfull";
    }else{
        echo "Unsuccessful insertion";
    }
?>