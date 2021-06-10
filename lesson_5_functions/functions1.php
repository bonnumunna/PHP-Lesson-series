<?php
    /*
     * ====== PHP FUNCTIONS ======
     * Functions are blocks of program statments 
     * that can be called at any point in our program
     * code. It is encasing a set of task(s) in named
     * block.
     * We have over 1000 PHP in-built functions
     * And we can also create our own user defined 
     * functions to perform our tasks.
     */
    // SOME PHP ARRAY FUNCTIONS
    /*
     * in_array()
     * array_pop()
     * array_push()
     * str_split();
     * explode()
     * implode()
     * array_combine()
     * array_merge()
     * array_chunk()
     * list()
     * array_rand()
     * end()
     */

     $string1 = "interglobalizational";
     $array1 = array('U','N','I','C','E','F');
     $cars = ['Benz', 'Volvo', 'Nissan', 'Peugeot'];
     $array2 = array(5, 8, 4, 9);

    //  echo $string1;
    //  echo "<br>";
     $result = str_split($string1);
    //  print_r($result);
    list($a, $b, $c) = ['Ada', 'bola', 'clara'];
    // COMBINE
    /*
     * This will combine two arrays as key => value
     * pairs. The function returns an array
     */
    $result = array_combine($array2, $cars);
    // Count will return the number of elements in array
    // echo count($cars);
    // echo count($array2);
    // print_r($result);
    // echo "<br>";
    // echo $result[4];
    /*
     * Array mer
     */
    $result = array_merge($array2, $cars);
    // print_r($result);
    // echo "<br>";
    // echo count($result);
    $result = array_pop($cars);
    // echo $result;
    // echo "<br>";
    // print_r($cars);
    $result = array_push($cars, 'Toyota');
    // print_r($result);
    // echo $result;
    // echo "<br>";
    // print_r($cars)
    $result = in_array('E', $array1);
    // echo $result;
    $value = 'U';
    // if(in_array($value, $array1)){
    //     echo "Accepted";
    // }else{
    //     echo "Not accepted";
    // }

    // EXPLODE FUNCTION
    /*
     * This function will separate a string of
     * character at specific points identified
     * by a separotor.
     * The reult of the operation is an array.
     */
    $file1 = "passport.jpg";
    $file2 = "www.niit.co.uk";
    $file3 = "hardwork+smartwork+discipline";
    $file4 = "interglobalizational";
    $file5 = "C://programs/documents/class/result.docx";

    // $result = explode('.', $file1);
    // $result = explode('.', $file2);
    $result = explode('+', $file3);
    // $result = explode(" ", $file4);
    // $result = str_split($file4);
    // $result = explode('/', $file5);
    // print_r($result);

    // ===== IMPLODE =====
    /*
     * Implode will do the reverse of explode.
     * that is, converting an array into string.
     * It accepts a separator parameter.
     */
    $array1 = array('U','N','I','C','E','F');
    $result = implode('', $array1);
    
    // echo $result;
    $result = str_split($result);
    // print_r($result);
    // echo "<br>";
    // echo end($result);
    $cars = ['Benz', 'Volvo', 'Nissan', 'Peugeot'];
    // echo end($cars);
    $file6 = "landdocument..docx";
    $allowedFileType = array('pdf', 'docx', 'jpeg','jpg');
    $fileArray = explode('.', $file6);
    // print_r($fileArray);
    $fileExtension = end($fileArray);
    // echo $fileExtension;
    // if(in_array($fileExtension, $allowedFileType)){
    //     echo "File Accepted";
    // }else{
    //     echo "File type not supported";
    // }

    // USER DEFINED FUNCTION
    /*
     * As a PHP programmer, you can create your
     * own user defined function. You do this by
     * using the keyword 'function' and then the
     * function name followed by set of paranthesis.
     * The set of code(s) to be run is enclosed 
     * within the curly brace after the parenthesis.
     * A function will never run until it is installed
     * even though it may be in the program file.
     * To run a function, you call it.
     * This is done by writing the function name.
     * =========================================
     * Functions can have parameters or none.
     * Where a function has paretemers, it is passed
     * as arguments in the paranthesis
     */
    
    function sayHello(){
        echo "Hello Class";
    }
    // sayHello();
    /*
     * Normally, functions are made to return values
     * rather than echoing the results out automatically.
     * This is a better way of writing functions.
     * FOR EXAMPLE
     */
    function greetPerson(){
        return "Good morning to you.";
    }
    $greet = greetPerson();
    // echo $greet;

    // PASSING ARGUEMENTS/FUNCTION PARAMETERS
    
    function greetPeople($name = "Everyone"){
        $gp = "Good day ".$name;
        return $gp;
    }

    $greet = greetPeople();
    // echo $greet;

    function processFile($fileName = "Please input value"){
        $allowedFileType = array('jpeg','jpg', 'png');
        $fileArray = explode('.', $fileName);
        $fileExtension = end($fileArray);
        if(in_array($fileExtension, $allowedFileType)){
            return "File Accepted";
        }else{
            return "File not supported";
        }
    }
    $passFile = processFile("passport.jpeg");
    // echo $passFile;

    // ======= DATES IN PHP ==========
    /*
     * The date() function is used to display dates
     * in PHP. And it takes parameter for formatting
     * the dates.
     * The time() function gives the UTC time which is
     * the UNIX epoch since January 1st 1970;
     * However it is worthy of note that this will expire
     * on January 19, 2038 because a 32bit overflow. 
     */

      /*
       * FORMATTING date() inputs
       * Y year in full e.g. 2021
       * y year in half e.g. 21
       * m month in numbers e.g 6 for June
       * M month in string e.g. June
       * d day in numbers e.g 6 for Friday and 1 for Sunday
       * l day in string e.g Fri for Friday
       * h hour
       * i minutes
       * s seconds
       * a meridian e.g. am or pm
       * A meridian e.g. AM or PM
       */
    //   $date = date("d/m/Y");
    date_default_timezone_set("Africa/Lagos");
    $date = date("d/M/Y h:i:sa");

    //   echo $date;

    /*
     * mktime is used to specify a date from
     * the UNIX time frame to that particular
     * date, whether past, present, or future.
     */
    $var1 =mktime(7, 40, 52, 1, 7, 2021);
    // echo $var1;
    // echo "<br>";
    // echo date("l d/M/Y", $var1);

    /*
     * strtotime() function will take a string
     * of value which connotes time and convert it
     * to formatted date.
     */
    $date1 = strtotime("7:00pm 22 September");
    $date2 = strtotime("4 months");
    $date3 = strtotime("tomorrow");
    $date4 = strtotime("next sunday");

    // echo date("d/m/Y h:i:s a", $date1);
    // echo date("l/M/Y h:i:sA", $date2);

    //  print_r(getdate());
    // $var2 = getdate();
    // echo $var2['month'];

    // echo checkdate(13, 4, 2039);
    
    function calculateArea($length, $breath, $shape){
        $shape = strtolower($shape);
        switch ($shape) {
            case 'square':
                echo "The area is ".$length * $breath;
                break;
            case 'rectangle':
                echo "The area is ".$length * $breath;
                break;
            case 'triangle':
                echo "The area is ". $length * $breath*1/2;
                break;
            case 'trapezium':
                echo "The area is ". ($length + $breath)* 5 *1/2;
                break;
            default:
                echo "That shape isn't recognized";
                break;
        }
    }
    calculateArea(7, 8, "square");

?>