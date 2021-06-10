<?php
    // ==================== SESSIONS ====================
    /*
        Literally, a browsing session entails a user logging into a
        system with a user ID and password. He performs some tasks 
        and logs out after the browsing session.
        An important question is, how can the computer identify the
        user while he is accessing the various pages in the website?
        Another question is, how can the system carry data from one
        page to another?
        To solve this problem, sessions or cookes can be created.
        To make data available across pages using sessions, we use the
        $_SESSION[] superglobal. But to do this we would have instructed
        the PHP server with the session_start() function at the topmost
        of our code.
    */
    // START SESSION
    // session_start();
    // SUBMIT FORM
    if(isset($_POST['login'])){
        $user= $_POST['username'];
        $pass= $_POST['password'];


        // CREATE SESSION VARIABLES
        // $_SESSION['user'] = $user;
        // $_SESSION['pass'] = $pass;

        // CREATE COOKIE
        setcookie('user', $user, time()+3600, "/");
        setcookie('pass', $pass, time()+3600, "/");

        // RE-DIRECT USER TO WELCOME PAGE
        header("Location: user.php");
    }
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../bootstrap-4.6.0-dist/css/bootstrap.min.css">
        <title>SESSION</title>
    </head>

    <body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5 mt-5">
                    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                        <div class="form-group">
                            <label for="username">Username*</label>
                            <input type="text" name="username" id="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password">Password*</label>
                            <input type="password" name="password" id="" class="form-control">
                        </div>
                        <br>
                        <button type="submit" name="login" class="btn btn-primary float-right">LOGIN</button>
                    </form>
                </div>
            </div>
        </div>
    </body>

    </html>