<?php
    $msg = "";
    $name = "";
    // if(isset($_POST['submit'])){
    //     $search = $_POST['search'];

    //     // $msg = $search;

    //     $regex = "/kill|suicide|bomb|rape|attack|kidnap|fight|steal|rob|arms/";

    //     if(preg_match($regex, $search)){
    //         // TAKE USER AWAY
    //         header("location: barred.php");
    //     }else{
    //         // QUERY DATABASE TO BRING LIKE WORDS
    //         header("Location: search.php");
    //     }
    // }
    /*
        PHONE: +234-9061863234
        EMAIL:  johndoe@gmail.com -> go
                johndoe2000@gmail.com -> go
                john.doe@yahoo.co.uk -> go
                john_doe@gmail.com -> go
                john-doe@yahoo.com -> go
                _john.doe@gmail.com
    */
    if(isset($_POST['submit'])){
        $input = $_POST['search'];
        
        // NIGERIAN PHONE
        // $regex = "/^[+][2][3][4]-[0-9]{10}$/";

        // EMAIL
        /* email@url
            SOME URL FORMATS
            xyz.com
            abc.co.uk
            abc-xyz.com
            abc_xyz.com
            abc249.com
         */
        $regex = "/^[a-z][a-z0-9-_\.]+@[a-z0-9-_]+\.[a-z0-9-_\.]{2,}$/";
        if(preg_match($regex, $input)){
            $msg = "<span style='color: green;'>Match</span>";
        }else {
            $msg = "<span style='color: red;'>Not Match</span>";
        }
    }

    // $string = "asdxyz234efghi789prq456g";
    // $string = "360";
    // $regex = "##";
    // $regex = "/[a-z0-9]/";
    // CHECK BEGINING CHARACTER
    // $regex = "/[a-z]+/";
    // $regex = "/^[a-z]./"; # apply rule to the current and the next.
    // CHECK END CHARACTER
    // $regex = "#[a-z]$#";

    // CHECK ALL
    // $regex = "/[a-z]{1,3}/"; # match pattern from 1st pos. to 3rd position.

    // ALTERNATE PATTERN (OPPOSITE)
    // $string = "@";
    // $regex = "/[^a-z@]/";

    // if(preg_match($regex, $string)){
    //     $msg = "<span style='color: green;'>Match</span>";
    // }else{
    //     $msg = "<span style='color: red;'>Not Match</span>";
    // }

    // preg_match($regex, $string, $matches);
    // preg_match_all($regex, $string, $matches);

    // print_r($matches);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../bootstrap-4.6.0-dist/css/bootstrap.min.css">
    <title>SEARCH</title>
</head>

<body>
    <h1 class="text-center text-info">
        <?php
            if(!empty($msg)){
                echo $msg;
            }
        ?>
    </h1>
    <div class="row justify-content-center mt-5">
        <div class="col-md-5">
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                <input type="search" name="search" id="search" placeholder="enter search item"><button type="submit" name="submit">GO</button>
            </form>
        </div>
    </div>
</body>

</html>