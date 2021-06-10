<?php
  /**
   * @author <Bonn Umunna> 
   * GitHub Account: <https://github.com/bonnumunna>
   * 
   * @version PHP V7.5
   */

   /*
            AN INTRODUCTION TO PHP PROGRAMMING
      PHP (Hypertext PreProcessor) is a server side scripting language which was developed around the mid 90s.
      It has grown over the years and established its presence in the backend ecosystem of the world wide web.
      Several websites are powered by PHP; notable among them is facebook.com. Also WordPress.
      PHP has some cleaner frameworks like Laravel, CodeIgniter and CakePHP which makes the programmer's life easier.
   */
    /*
       This is for multiple line comments
       And we can also input Comments here
     */

     # This is used for single line comments
     // This can also be used for single line comments

     // DISPLAYING AND DEBUGGING CODE ON THE BROWSER

     /*
       1. echo
       2. print()
       3. die()
       4. print_r (Used to output arrays)
       5. var_dump (used to output arrays with extra info)
      */

      # ECHO
    //   echo "Hello Guys!";
    // print('Hello World!');

    // echo "The script ends here. Don't run further.";
    // exit(); # With this exit() function, the script terminates (excluding any futher codes down the line)
    // die('The script ends here...');
    // echo "<br>";
    // echo "You will not see this.";
    // die()

    # VARIABLES AND DATA TYPES
    /*
      1. number(integer)
      2. number(float)
      3. string
      4. boolean
      5. array
      6. null
     */ 

     // NAMING RULES FOR NAMING VARIABLES IN PHP
     /*
       1. Must start with $ sign
       2. Can contain underscore, alphabet
       3. Must not start with number after $
       4. Must not contain special chars e.g. *, ), % etc.
       5. Variables must be meaningful, indicating what it's meant for
      */
      $age = 17;
      $num1 = 5;
      $num2 = 7;
      $val = null;
      $string1 = "Hello";
      $string2 = "my people";
      $cars = array('Audi', 'Ford', 'Honda','Ferrari');

      // Assignment Operator (=)

      // Math/Arithmetic Operators
      /*
        + Addition
        - Subtraction
        / Division
        * Multiplication
        % Modulus (used to get remainder after division)
       */

      // Comparison Operators
      /*
        > Greater Than
        < Less than
        >= Greater than or equal to
        <= Less than or equal to
        == Equal value
        != Not equal to
        === Same type (and equal value)
        !== Not same type
       */
      
       // Logical Operators
      /*
       * ! Not (negation)
       * && Logical AND
       * || Logical OR
       */
    
      // Concatenation and Manipulation of Variables
      //  echo $num1;
      // echo "The number is ".$num1;
      $sum = $num1 + $num2;
      $product = $num1 * $num2;
      $quotient = $num1 / $num2;
      $quot = $num2 / $num1;
      $modulus = $num2 % $num1;
      $sum = $num2 + $val;

      // Using Single Quotes With '\' for strings
      $string3 = 'They\'re coming today.';
      // Using Double Quotes Without '\' for strings
      $string4 = "They're to arrive by 11am";
      // Difference between single quote and double quote wrapping of variables
      $string5 = '$string1 $string2';
      $string5 = "$string1 $string2";
      $numString = "$num1$num2";
      $statement = "My favourite number is ".$num2;

      // echo $statement;
      // echo $sum;
      /*
        PHP echo statement can also take HTML elements written as string (within quotes, this may include CSS)
      */
      echo "<div><h1>My name is <span title='Authour' style='color: blue;'>John Doe</span></h1></div>";

      // DEFINING IN CONSTANTS IN PHP
      // define('PI', 3.142, true);
      // define('DB_HOST', 'localhost', false);
      // define('DB_USER', 'root');
      // define('DB_PASS', 'password@123');
      // define('DB_NAME', 'niit_php_class');

      // echo pi;
      // echo DB_HOST;
?>