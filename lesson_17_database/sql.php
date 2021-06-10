<?php
    // CREATE DATABASE - This will not work from here until connected to server
        $sql_string = "CREATE DATABASE phplesson5";

    // CREATE TABLE
        $sql_string = "CREATE TABLE IF NOT EXISTS users(
            id INT(11) PRIMARY KEY AUTO_INCREMENT,
            firstname VARCHAR(20),
            lastname VARCHAR(20),
            gender ENUM('male','female'),
            email VARCHAR(20),
            country VARCHAR(40),
            reg_date DATETIME DEFAULT CURRENT_TIMESTAMP
        )";
    // INSERT VALUES
            $sql_string = "INSERT INTO users(firstname,lastname,gender,email,country) VALUES('$firstname','$lastname','$gender','$email','$country','$reg_date')";

    // SELECT VALUES
            // select everything
            $sql_string = "SELECT * FROM users";
            // select specific columns
            $sql_string = "SELECT firstname, lastname FROM users";

    // SELECT WITH CONDITIONS
            $sql_string = "SELECT * FROM users WHERE gender='female'";
            $sql_string = "SELECT * FROM users WHERE age > 50";
            $sql_string = "SELECT * FROM users WHERE age BETWEEN 50 AND 62";
    // UPDATE VALUES
            $sql_string = "UPDATE users SET firstname='$newFirstname' WHERE email='$email'";
    // DELETE VALUES
            $sql_string = "DELETE FROM users WHERE email='$email'";
    // ADD EXTRA COLUMN
        $sql_string = "ALTER TABLE users ADD COLUMN age INT(11)";
    // MODIFY COLUMN
        $sql_string = "SELECT lastname AS surname FROM users;";
    // SEARCH VALUES
        $sql_string = "SELECT * FROM `users` WHERE lastname  LIKE '%z%'";
?>