<?php
    // DECLARE AND INITIALIZE MESSAGE VARIABLE
    $msg = "";
    // CHECK FOR SUBMIT BUTTON
    if(isset($_POST['subscribe'])){
        $name = $_POST['name'];
        $email = $_POST['email'];

        // echo "$name $email $subject $message";
        // CHECK FOR EMPTYE FIELDS
        if(empty($name)){
            $msg = "Please fill name";
        }else if(empty($email)){
            $msg = "Please fill email";
        }else{
            // ALL WENT WELl. PREPARE TO SEND EMAIL

            $to = $email; #Reciepient's email address
            // mail($reciepient, $subject, $message, $header)
            $subject = "APP SUBSCRIBTION";
            // INCLUDE TEMPLATE MESSAGE
            include "./custom-template.php";
            // TRANSFER CONTENT TO BUFFER USING OB_GET
            $message = ob_get_contents();
            // CLEAN OUTPUT BUFFER
            ob_get_clean();
            
            $header = array(
                "MIME-Version" => "1.0",
                "Content-type" => "text/html;charset=utf-8",
                "From" => "admin@triumphantteens.com",
                "Reply-to" => "null"
            );

            if(mail($to, $subject, $message, $header)){
                $msg = "<h1 style='color: #0f0;'>Message Sent</h1>";
            }else{
                $msg = "<h1 style='color: #0f0;'>Message NOT Sent</h1>";
            }
        }
    }
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./style.css">
        <title>Send Mail</title>
        <style>
            header{
                background-color: dodgerblue;
                color: #fff;
                display: flex;
                flex-direction: column;
                align-items: center;
                padding: 20px;
            }
        </style>
    </head>

    <body>
        <header>
            <h1>Sending Subscribe Mails With PHP mail() Function</h1>
            <h4>By Faculty Bonn</h4>
            <h5>August 4th, 2022</h5>
        </header>
        <div class="container">
            <form action="index.php" method="post">
                
                <div>
                    <?php
                        if(!empty($msg)){
                            echo "<span style='color: #e0e;'>". $msg . "</span>";
                        }
                    ?>
                </div>
                <div>
                    <label for="name">Name</label>
                    <input type="text" name="name" id="" placeholder="enter full name" value="<?php echo isset($name)? $name: ''; ?>">
                </div>
                <div>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="" placeholder="enter email" value="<?php echo isset($email)? $email: ''; ?>">
                </div>
                <button type="submit" name="subscribe">SUBSCRIBE</button>
            </form>
        </div>
    </body>

    </html>