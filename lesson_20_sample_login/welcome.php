<?php
    // session_start();
    // if(!isset($_SESSION['email']) && !isset($_SESSION['password'])){
    //     header('Location: index.php');
    //     exit();
    // }
    if(isset($_POST['submit'])){
        $text = $_POST['text'];
        // echo "This is the inputed text: ". $text;
        // ACCESS FILE PATH
        $file = './users/'.$_COOKIE['email'].'/myFile.txt';

        // OPEN FILE
        $handle = fopen($file, 'r+');
        fwrite($handle, $text);
        fclose($handle);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    <?php
            $path = $_SERVER['SCRIPT_NAME'];
            $pathArr = explode('/', $path);
            $file = end($pathArr);
            $fileExplode = explode('.', $file);
            if($fileExplode[0] == 'index'){
                echo "Home";
            }else{
                echo $fileExplode[0];
            }
        ?>
    </title>
</head>
<body>
    <!-- <h3>Welcome <?php //echo $_SESSION['email'];?></h3> -->
    <h3>Welcome <?php echo $_COOKIE['email'];?></h3>

    <p>Your password is <?php echo $_COOKIE['password'];?></p>
    <button>
        <a href="logout.php">Logout</a>
    </button>
    <div>
            <form action="welcome.php" method="post">
            <fieldset>
            <legend>User Response</legend>
            <div>
                    <textarea name="text" id="" cols="30" rows="10" placeholder="enter text"></textarea>
                </div>
                <input type="submit" name="submit" value="SUBMIT">
            </fieldset>
            </form>
    </div>
</body>
</html>