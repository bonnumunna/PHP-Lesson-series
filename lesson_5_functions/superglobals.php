<?php
    /*
        ============== SUPERGLOBAL VARIABLES ===============
        These are variables that are available in all scope. They can
        access and be accessed in functions, classes, loops and on
        the script file outside of any of the above constructs.
        1. $GLOBALS # Returns an array of variables (both superglobals)
        2. $_SERVER # Used to access server-based parmeters
        3. $_GET
        4. $_POST
        5. $_REQUEST
        6. $_ENV
        7. $_COOKIE
        8. $_SESSION
        9. $_FILES
    */

    // print_r($GLOBALS);
    echo "<h1>SERVER INFO</h1>";
    echo "SERVER NAME: ".$_SERVER['SERVER_NAME']."<br>";
    echo "SERVER ADDRESS: ".$_SERVER['SERVER_ADDR']."<br>";
    echo "SERVER PORT: ".$_SERVER['SERVER_PORT']."<br>";
    echo "SERVER PROTOCOL: ".$_SERVER['SERVER_PROTOCOL']."<br>";
    echo "SERVER SOFTWARE: ".$_SERVER['SERVER_SOFTWARE']."<br>";
    echo "SCRIPT NAME: ".$_SERVER['SCRIPT_NAME']."<br>";
    echo "SCRIPT FILENAME: ".$_SERVER['SCRIPT_FILENAME']."<br>";

    echo "<h1>CLIENT INFO</h1>";
    echo "HTTP USER AGENT: ".$_SERVER['HTTP_USER_AGENT']."<br>";

    
?>