<?php
    /*
        ================ CONDITIONAL PROGRAMMING IN PHP =============
        While writing computer programs you will always check for certain condition 
        before deciding the course of your program flow (action to take).
        To achieve this in PHP (and many other programming languages) we would use:
        1. IF... ELSE..
            This will take a test case in a parenthesis and check the boolean value. Once it evaluates to true, the first part of the code runs. Otherwise, the else part or the other part runs.

        2. SWITCH... CASE...
            A variable might possibly hold different values which could determine the course of action of a program. Instead using several IF...ELSE... statements, it is much cleaner to use a switch...case... statement.
    */

    // Let's check the difference between these values
    $num1 = 15;
    $num2 = "15";
    $num3 = 17;

    # =========== IF...ELSE...====================

    // if($num1 > $num3){
    //     // code to run if condition is true
    //     echo "That is true";
    // }else{
    //     echo "That is not true";
    // }

    // if($num1 === $num2){
    //     echo "Equal value";
    // }else{
    //     echo "Unequal value";
    // }

    // if(($num1 > 10) AND ($num3 < 20)){
    //     echo "True";
    // }else{
    //     echo "False";
    // }

    // NESTED IF STATEMENTS
    /* IF...ELSE statments can be wrapped inside of other IF...ELSE... statments */
    $age = 18;
    $title = "admin";

    // if($age >= 18){
    //     // echo "Gain entrance";
    //     if($title == "admin"){
    //         echo "Allowed";
    //     }else{
    //         echo "Illegal, How did you get here?";
    //     }
    // }else{
    //     echo "No entry";
    // }

    // COMBINED CONDITIONAL STATEMENTS

    // if($age >= 18 AND $title == "admin"){
    //     echo "Allowed";
    // }else{
    //     echo "Not Allowed";
    // }

    # =========== MULTIPLE IF... ELSE ... ===========
    $user = "johndoe@gmail.com";
    $password = "";
    $fname = "John";
    $lname = "";
    $city = "";
    
    
    // if($user == ""){
    //     $user_msge = "User field empty";
    // }
    // if($password == ""){
    //     $pwd_msg = "Pwd field empty";
    // }
    // if($fname == ""){
    //     $fname_msg = "Fname field empty";
    // }

    // if($user == ""){
    //     $msg = "User field empty";
    // }else if($password == ""){
    //     $msg = "Pwd field empty";
    // }else if($fname == ""){
    //     $msg = "Fname field empty";
    // }else{
    //     $conn = mysqli_connect('localhost', 'root', '', 'mydatabase');

    //     $sql = "INSERT INT users(user, pwd, fname) VALUES('$user', '$pwd', ')";
    // }


    // =============== SWITCH CASE ================
    // $fruits = "Banana";
    // switch($fruits){
    //     case "Watermelon":
    //         echo "I love ".$fruits;
    //         break;
    //     case "Apple":
    //         echo "I enjoy eating ".$fruits;
    //         break;
    //     case "Orange":
    //         echo "We love love ".$fruits;
    //         break;
    //     default:
    //         echo "We don't have ".$fruits;
    //         // break;
    // }

    $day = "Friday";

    // Here concatenation is emphasized on the codes. Master it.
    switch($day){
        case "Monday":
            echo "I have JavaScript and PHP classes on ".$day."s";
            break;
        case "Tuesday":
            echo "I have Java, RWD and Java classes on ".$day."s";
            break;
        case "Wednesday":
            echo "I am free from classes but on official duties on ".$day."s";
            break;
        case "Thursday":
            echo "I have Java, JavaScript and PHP classes on ".$day."s";
            break;
        case "Friday":
            echo "I have Java and PHP classes on ".$day."s";
            break;
        default:
            // This branch will run, when a value not captured in the days is inputed
            echo "That's my resting day, I don't go to work.";
    }
   
?>