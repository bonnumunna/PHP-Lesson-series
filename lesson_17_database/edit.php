<?php
    // include database connection
    require_once('./inc/connection.php');

    // Check for url variable
    if(isset($_GET['id'])){
        $person_id = htmlentities($_GET['id']);
        //echo $person_id;

        // use id to query users table
        $sql_query = "SELECT * FROM users WHERE id= '$person_id'";
        $query = mysqli_query($conn, $sql_query);
        $details = mysqli_fetch_assoc($query);
        //print_r($details);
    }
    
    // SUBMIT FORM
    if(isset($_POST['update'])){
        $firstname = htmlentities(trim($_POST['firstname']));
        $lastname = htmlentities(trim($_POST['lastname']));
        $gender = htmlentities(trim($_POST['gender']));
        $country = htmlentities(trim($_POST['country']));
        $email = htmlentities(trim($_POST['email']));
        $age = htmlentities(trim($_POST['age']));

        // CHECK THAT THE FORM IS NOT EMPTY
        if($firstname !="" AND $lastname !="" AND $gender!=""AND $country!="" AND $email!="" AND $age!=""){

            $sql_query = "UPDATE users SET firstname='$firstname', lastname='$lastname', gender='$gender', email='$email', country='$country', age='$age' WHERE id='$person_id'";
            $query = mysqli_query($conn, $sql_query);

            header("Location: index.php");

            /*
            if($query){
                $msg = "<span class='text-success'>Record Inserted..!</span>";
            }else{
                $msg = "<span class='text-danger'>MySQL error..!</span>";
            }
            */
        }
        
    }

    // close connection
    mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../bootstrap-5.0.2/css/bootstrap.min.css">
    <title>CRUD Operation</title>
    <style>
        .logo-text {
            font-weight: lighter;
            font-style: italic;
            color: cyan;
            border-bottom: 3px solid #fff;
            font-family: cursive;
        }
        
        ul li a {
            text-decoration: none;
            color: cyan !important;
        }
    </style>
</head>

<body>
    <header class="bg-secondary text-light p-2">
        <div class="d-flex justify-content-between mx-3">
            <span id="logo" class="display-6 p-1 fw-bold">People<span class="logo-text">Base</span></span>
            <ul class="nav list-unstyled">
                <li class="nav-item"><a href="#records" class="nav-link my-link">Records</a></li>
                <li class="nav-item"><a href="#upload" class="nav-link my-link">Upload</a></li>
            </ul>
        </div>
    </header>
    <div class="container">
        <section id="upload" class="bg-white my-5 p-">
            <div class="row justify-content-center">
                <div class="col-md-7">
                    <div class="card">
                        <div class="card-header text-center text-muted">
                            <h4 class="card-title">Edit Personal Details</h4>
                        </div>
                        <div class="card-body">
                            <!-- form goes in here -->
                            <form action="" method="post">
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <input type="text" value="<?php echo $details['firstname'];?>" name="firstname" placeholder="enter firstname" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <input type="text" value="<?php echo $details['lastname'];?>" name="lastname" placeholder="enter lastname" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <span class="fw-bold">Gender</span>:&nbsp;
                                            <input type="radio" name="gender" value="male" <?php echo ($details['gender']=='male')? 'checked': ''; ?>>&nbsp;Male&nbsp;
                                            <input type="radio" name="gender" value="female" <?php echo ($details['gender']=='female')? 'checked': ''; ?>>&nbsp;Female
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <select name="country" aria-placeholder="country" class="form-select" required>
                                                <option value="">--select country--</option>
                                                <?php
                                                    include_once('./inc/countries.php');
                                                    foreach($countries as $country => $cn){
                                                        echo "<option value='".$country."'>".$cn."</option>";
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <input type="email" value="<?php echo $details['email'];?>" name="email" placeholder="enter email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <input type="number" value="<?php echo $details['age'];?>" name="age" placeholder="enter age" min="18" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-lg" name="update">UPDATE</button>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer text-sm text-center">
                            <p class="text-sm text-muted">&copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
</body>

</html>