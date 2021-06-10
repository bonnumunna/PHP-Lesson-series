<?php
    /*
    =================== PHP STRING FUNCTIONS ===================
    PHP has a rich store of functions for manipulating and processing
    strings. Some of them will be used here.
    */

    $text = "hello wold";

    // $result = strtoupper($text);  # Transforms text to uppercase
    // echo $result;
    
    // $text = "NAFDAC";
    // $result = strtolower($text); # Transforms to lowercase
    // echo $result;

    // $text = "INTERNATIONAL";
    // $result = str_split($text); # Splits the string into an array
    // print_r($result);

    $text = "Today is Monday the 28th day of March 2022. And we are
    having a PHP class.";

    // $result = gzcompress($text); # Compresses text to scrambled symbols
    // echo $result;
    // echo "<br>";
    // $result2 = gzuncompress($result);
    // echo $result2;
    $result = explode(" ", $text);
    // print_r($result);
    $text1 = "phplesson3/functions/strings/strings.php";
    $result = explode("/", $text1);
    $endResult = end($result);
    // print_r($result);
    // echo $endResult;

//   "resume.pdf", "passport.jpg", "letterhead.docx", "report.xls"
    $file = "resume.png";
    $result = explode(".",$file);
    // $fileExtension = end($result);
    // // print_r($result);
    // $fileType = ["png", "jpeg", "jpg", "gif"];
    // // in_array() returns boolean value.
    // if(in_array($fileExtension, $fileType)){
    //     echo "File accepted";
    // }else{
    //     echo "File type not allowed";
    // }
    $array1 = ['N','A','F','D','A','C'];
    $result = implode('', $array1);
    // echo $result;
    // $result2 = str_split($result);
    // print_r($result2);
?>