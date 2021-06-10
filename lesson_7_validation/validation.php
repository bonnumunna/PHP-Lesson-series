<?php
    // PHP FORM INPUT VALIDATION
    /*
      Validation will check an input value against some expected
      values.
      FILTER_VALIDATE_EMAIL
      FILTER_VALIDATE_FLOAT
      FILTER_VALIDATE_INT
      FILTER_VALIDATE_URL


      SANITIZING FORM INPUTS
      The following filters are used:
     1. FILTER_SANITIZE_NUMBER_INT
     2. FILTER_SANITIZE_SPECIAL_CHAR
     3. FILTER_SANITIZE_STRING
     4. FILTER_SANITIZE_EMAIL
     */

     /*
       Functions used are normally
       filter_has_var(method superglobal, input variable from form)
       e.g. filter_has_var(INPUT_POST, $_POST['email']);
       This man is same as using if(isset())
       and 
       filter_var()
       This will return a boolean for validation parameter and 
       will return a string for sanitization parameter
      */

    //   if(isset($_POST['submit'])){
    //     $text = $_POST['text'];
    //     if(filter_var($text, FILTER_VALIDATE_EMAIL)){
    //     // if(filter_var($text, FILTER_VALIDATE_INT)){
    //         echo $text."<span style='color:green;'> is valid</span>";
    //     }else{
    //         echo $text. "<span style='color:red;'> is invalid</span>";
    //         $result = filter_var($text, FILTER_SANITIZE_EMAIL);
    //         echo "<br>";
    //         echo "The sanitized form is: ".$result;
    //     }
    //   }
    // if(isset($_POST['submit'])){
    //     /*
    //      * There are special PHP functions used to escape special characters
    //      * during form inputs. These are used to nullify or escape hacker code
    //      * injection through form inputs
    //      */
    //     $text = htmlentities($_POST['text']);
    //     // $text = htmlspecialchars($_POST['text']);
    //     // Used when sending input variables to database.
    //     // $text = mysqli_real_escape_string($_POST['text']);

    //     $result = filter_var($text, FILTER_SANITIZE_STRING);
    //     echo $result;
    // }
    
    // COMMONLY USED VALIDATION FUNCTIONS
    /*
      ctype_alnum()    #Checks for alphabets and numerical value 
      ctype_alpha()    // Checks for alphabes
      ctype_digit()    // Checks for numerical value
      ctype_cntrl()    // This check for control characters e.g. shift, enter, esc
      # EXAMPLES OF PHP NOTATION FOR CONTROL CHARACTERS
      \t   TAB
      \n   New Line
      \r   Return
      \b   Back space
      ctype_lower()    // Checks for lower case
      ctype_upper()    // Checks for upper case
      
     */
    if(isset($_POST['submit'])){
        $text = $_POST['text'];
        // if(!ctype_alnum($text)){
        //     echo "The input is not alphanumeric";
        // } else{
        //     echo "The input is alphanumeric";
        // }
        // if(!ctype_alpha($text)){
        //     echo "The input is not alphabet";
        // } else{
        //     echo "The input is alphabet";
        // }
        // if(!ctype_digit($text)){
        //     echo "The input is not digit";
        // } else{
        //     echo "The input is digit";
        // }
        // if(!ctype_lower($text)){
        //     echo "The input is not lower case";
        // } else{
        //     echo "The input is lower case";
        // }
        // if(!ctype_upper($text)){
        //     echo "The input is not upper case";
        // } else{
        //     echo "The input is upper case";
        // }
        // if(!ctype_cntrl($text)){
        //     echo "The input is not control character";
        // } else{
        //     echo "The input is control character";
        // }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation/Sanitizing</title>
</head>
<body>
    <form action="validation.php" method="POST">
        <input type="text" name="text" id="" placeholder="enter text" autofocus>
        <input type="submit" name="submit" value="SUBMIT">
    </form>
    
</body>
</html>