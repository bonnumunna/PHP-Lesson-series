

<?php
    // session_start();
$msg= "";
require_once('./includes/dbConnect.php');

if(isset($_POST['register'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE `email`='$email'";
    $query = mysqli_query($connection, $sql);
    $num_rows = mysqli_num_rows($query);
    $arr = mysqli_fetch_assoc($query);
    if($num_rows>0){
        $msg = "Sorry user already exists";
    }else{
        $sql = "INSERT INTO users(`email`, `password`) VALUES('$email', '$password')";
        if(mysqli_query($connection, $sql)){
            mkdir('users/'.$email);
            $msg = "Registeration Successful";
        } else{
            $msg = "There was a problem";
        }
    }

    
    
}
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $sql = "SELECT * FROM users WHERE `email`='$email' AND `password`='$password'";
    $query = mysqli_query($connection, $sql);
    $num_rows = mysqli_num_rows($query);
    $result = mysqli_fetch_assoc($query);
    print_r($result);
    // echo $num_rows;
    if($num_rows >0){
        // DECLARE SESSIONS
        // $_SESSION['email'] = $result['email'];
        // $_SESSION['password'] = $result['password'];
        
        // SETTING COOKIES
        setcookie('email', $result['email'], strtotime('1 day') );
        setcookie('password', $result['password'], time()+3600 );
        
        header("Location: welcome.php?email=".$email.'$password='.$password);
    } else{
        $msg = "Unsuccessful Login";
    }
}
    /**
     * SERVER SIDE INCLUDES (SSI's) have the following
     * 1. include()
     * 2. include_once()
     * 3. require()
     * 4. require_once()
     */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>
        <?php
            $path = $_SERVER['SCRIPT_NAME'];
            $fileExplode = basename($path, '.php');
            if($fileExplode == 'index'){
                echo "Home";
            }else{
                echo $fileExplode[0];
            }
        ?>
    </title>
</head>
<?php
    include_once('./includes/top.php');
?>
        <div class="row">
            <div class="col">
                <form action="index.php" method="POST" class="myForm">
                    <h4>Login Form</h4>
                    <div class="form-div">
                        <label for="email">Email*</label><br>
                        <input type="email" name="email" id="" placeholder="enter email">
                    </div>
                    <div class="form-div">
                        <label for="password">Password*</label><br>
                        <input type="password" name="password" id="password" placeholder="enter password">
                    </div>
                    <br>
                    <input type="submit" name="login" value="Login">
                </form>
            </div>
            <div class="col">
                <label style="text-align:center;">
                    <?php 
                        if($msg !=""){
                            echo "<span style='color:red;'>".$msg."</span>";
                        }
                    ?>
            </label>
                <form action="index.php" method="POST" class="myForm">
                    <h4>Registration Form</h4>
                    <div class="form-div">
                        <label for="email">Email*</label><br>
                        <input type="email" name="email" id="" placeholder="enter email">
                    </div>
                    <div class="form-div">
                        <label for="password">Password*</label><br>
                        <input type="password" name="password" id="" placeholder="enter password">
                    </div>
                    <br>
                    <input type="submit" name="register" value="Register">
                </form>
            </div>
        </div>

    <?php
        include_once('./includes/bottom.php');
    ?>
    