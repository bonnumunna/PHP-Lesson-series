<?php
    /*
        ============== LOOPS IN PHP ===============
        While performing task(s), there usually are cases where certain processes have to be repeated over and over until certain conditions are met. 
        Such scenarios are handled by looping constructs in programming. PHP offers the following types of loops:
        1. for...loop
        2. foreach loop
        3. while ... loop
        4. do... while loop
    */
    
    // FOR LOOP

    # count from 0 - 10 upwards
    for($i=50; $i >= 25; $i--){
        // echo $i."<br>";
        // INCREMENT THE COUNTER
        // $i = $i + 1; # ADDITION BY 1
        // $i += 1; # COMPLEX ASSIGNMENT
        // $i++; # INCREMENT OPERATOR
    }

    // WHILE LOOP
    # count upward
    $num = 40;
    // while($num <= 30){
    //     echo $num . "<br>";
    //     // INCREMENT COUNTER
    //     $num++; # INCREMENT BY 1
    // }
    // echo "while loop jumped<br>";

    // do{
    //     echo $num . "<br>";
    //     $num++; # INCREMENT BY 1
    // }while($num <= 30);

    $phplesson4 = array('Parish', 'Ovie', 'Christian', 'Lucas', 'Fegor', 'Favour');

    // for($i=0; $i< 6; $i++){
    //     echo $phplesson4[$i]. "<br>";
    // }

    // FOREACH LOOP
    $profile = [
        'name' => 'John Doe', 
        'age' => 42, 
        'gender' => 'male', 
        'country' => 'USA', 
        'marital_status' => true
    ];

    // foreach($profile as $key => $value){
    //     echo $key . " " .$value.  "<br>";
    // }

    // BREAK AND CONTINUE STATEMENTS
    /*
        There is a possibility of skipping a certain iteration count or outrightly discontinuing 
        counting operation in a loop. This is achieved using the continue and break keyword respectively.
    */
    
    for($i = 1; $i <=10; $i++){
        // CHECK IF i is a certain value
        if($i == 5){
            continue;
        }else if($i == 8){
            break;
        }
        echo $i . "<br>";

    }
    echo "================================<br>";
    for($i = 1; $i <=10; $i++){
        // CHECK IF i is a certain value
        if($i == 5){
            break;
        }
        echo $i . "<br>";

    }
?>
<html>
    <head>
        <title>List of Countries</title>
    </head>
    <body>
        <div>
            <label for="country">Country:</label>
            <br>
            <select name="" id="">
                <option value="">--select country--</option>
                <?php
                    // Here we use the include function to add the countries.php script
                    include("./countries.php");

                    foreach($countries as $country => $nation){
                        echo "<option value'$country'>$nation</option>";
                    }
                ?>
            </select>
        </div>
    </body>
</html>