<?php
    /* =================== FUNCTIONS ================= */
    /*
        Functions are named blocks of codes, written to perform some
        specific tasks.
        A function will remain idle until it is called.
        To call a function, we simply write its name followed by
        parenthesis e.g. calculate();
        To create or declare a function we use the keyword, function
        before the name we choose to call it, followed by a parenthesis

        ======== RULES TO NAMING FUNCTIONS =========
        We follow similar rules we used to name variables while naming
        functions. I.e. lowercasee, underscore, camel case, pascal.
        
    */

    // function greet(){
    //     echo "Good afternoon";
    // }
    function add(){
        $x = 7;
        $y = 8;

        echo $x + $y;
    }
    // greet();
    // add();

    function greet($name = 'everyone'){
        echo "Good afternoon ".$name;
    }
    // greet();

    // function addNumber($num1, $num2){
    //     $sum = $num1 + $num2;
    //     echo $sum;
    // }

    // addNumber(35345, 12345);

    // =============== RETURN STATEMENTS ============== //
    function addNumber($num1, $num2){
        $sum = $num1 + $num2;
        return $sum;
    }

    $answer = addNumber(4, 6);

    // echo "The answer is = ".$answer;

    // ASSIGNMENT 
    /* WRITE A FUNCTION CALLED calculateArea that will take]
    three parameters. */

    function calculateArea($shape, $dim1, $dim2=1){
        define("PI", 3.142);
        switch($shape){
            case "circle":
            $area = "Area of cirle is ". (PI*$dim1**2) . " unit sq.";
            return $area;
            // $area = PI* pow($dim1, 2);
                break;
            case "square":
                // code
                $area = "Area of square is ". ($dim1 * $dim2) . " unit sq.";
                return $area;
                break;
            case "rectangle":
                $area = "Area of rectangle is ".($dim1 * $dim2). " unit sq.";
                return $area;
                break;
            case "triangle":
                $area = "Area of triangle is ".(0.5 * $dim1 * $dim2)." unit sq.";
                return $area;
                break;
            case "trapezium":
                $area = "Area of trapezium is ".(0.5 * ($dim1 + $dim2)* $dim2)." unit sq.";
                return $area;
                break;
            case "cylinder":
                $area ="Area of cylinder is ". (2* PI* $dim1 * ($dim1 + $dim2)). " unit sq.";
                return $area;
                break;
            default:
                return "That shape is out of range.";
        }

    }

    
    $result = calculateArea("cylinder",5,16);
    echo $result;
?>