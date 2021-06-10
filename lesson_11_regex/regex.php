<?php
    /* 
        REGULAR EXPRESSSIONS (REGEXP for short)
        $regexp = "/pattern/";
        1. preg_match() # Returns a boolean
        2. preg_match_all() # returns an array. Takes three params
        3. preg_replace() # Replaces one pattern with another

        We use the following tags to modify our search pattens
        1. i - case Insensitive
        
        We also have some special characters referred to as meta-
        characters used as shorthand to form regex

        1. // or ## -Shows pattern identifier
        2. ^ - Used to show starting pattern
        3. $ - Used to show ending pattern
        4. [] - Used to specify pattern rules
        5. . - Used to match everything
        6. a-z - Used to match lowercase A-Z
        7. A-Z - Used to match uppercase A-Z
        8. 0-9 - Used to match digits 0 to 9
        9. + - apply rule from current position to the rest
        10. {n} - Apply rule to the first n characters
        11. {n,}+ - Apply rule starting from n character to the rest
        12. {n,m} - Apply rule starting from position n to m
        13. \d - Alternative to 0-9
        14. \s - Alternative to a tab space
        15. \w - Alternative to alphanumeric chaaracters
        16. \. - Full stop.
        17. | - The OR symbol, used to show alternative pattern. 
    */

    $regex = "/cat/i";

    $text1 = "I have a cat. Cats are my favourite pets. However, some people prefer dogs. This is because, dogs are faithful human servants but some people have complained of thier dogs dangerous when hungry. Therefore they prefer cats.";

    // if(preg_match($regex, $text1)){
    //     echo "<h1>Pattern Found!</h1>";
    // }else{
    //     echo "<h1>Pattern Not Found</h1>";
    // }

    // $replaced = preg_replace($regex, "rabbit", $text1);

    // echo $replaced;

    // echo "<br><br>";

    // echo $text1;

    $text2 = "2914982317345207845616976";   
    // $regex = "/2/";
    // $regex = "/[]/ig";
    if(preg_match_all("/2/", $text2, $array)){
        print_r($array);
    }else{
        echo "No match!";
    }
?>