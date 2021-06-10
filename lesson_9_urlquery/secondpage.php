<?php
    if(isset($_GET['name'])){
        $name = $_GET['name'];
        $age = $_GET['age'];
        $order = $_GET['order'];
        $city = $_GET['city'];
        $country = $_GET['Country'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello User See your details up there</h1>
    <h4>Profile</h4>
    <p>Name: <?php echo $name; ?></p>
    <p>Country: <?php echo $country; ?></p>
</body>
</html>