<?php
// Check if submit button is set (i.e. has been clicked)
    if(isset($_GET['submit'])){
        $text1 = $_GET['text1']; # Scoop up input field using $_GET global
        $text2 = $_GET['text2']; # Scoop up input field using $_GET global

        echo $text1 . " " . $text2;
        // $sum = $text1 + $text2;
        // echo $sum;
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-4.6.0-dist/css/bootstrap.min.css">
    <title>Form Submit</title>
</head>

<body>
    <header class="p-3 bg-primary text-center">
        <h1 class="text-white">PHP Form Submission</h1>
        <h3 class="text-white">Using GET, POST & FILES Superglobals</h3>
        <p class="text-warning">By Faculty Bonn. April 7, 2022</p>
    </header>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-4">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
                    <div class="form-group">
                        <label>Enter Text</label>
                        <input type="text" name="text1" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Enter Text</label>
                        <input type="text" name="text2" class="form-control">
                    </div>
                    <input type="submit" name="submit" value="Submit" class="btn btn-primary float-right">
                </form>
            </div>
        </div>
    </div>
</body>

</html>