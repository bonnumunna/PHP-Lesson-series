<?php
// AT PAGE REFRESH
    if(isset($_GET['first_name']) AND isset($_GET['last_name'])){
        $fname = $_GET['first_name'];
        $lname = $_GET['last_name'];
        $gender = $_GET['gender'];
        $country = $_GET['country'];


        echo "First Name: $fname <br>
        Last Name: $lname <br>
        Gender: $gender <br>
        Country: $country";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USERS</title>
</head>
<body>
    <h1>Welcome to User World...</h1>

    <a href="form1.php">Home</a>
</body>
</html>