<?php
    // include database connection
    require_once('./inc/connection.php');
    $form_report = "";
    $msg="";
    $del_msg ="";

    // SUBMIT FORM
    if(isset($_POST['submit'])){
        $firstname = htmlentities(trim($_POST['firstname'])); mysqli_real_escape_string($conn, $_POST['firstname']);
        $lastname = htmlentities(trim($_POST['lastname']));
        $gender = htmlentities(trim($_POST['gender']));
        $country = htmlentities(trim($_POST['country']));
        $email = htmlentities(trim($_POST['email']));
        $age = htmlentities(trim($_POST['age']));

        /*
        $fields = array($firstname, $lastname, $gender, $country, $email, $age);
        foreach($fields as $field){
            if($field == ""){
                echo $field . "<br>";
                //$form_report = "<p><small class='text-danger'>".$field." is empty</small></p>";
            }
        }
        */
        // CHECK THAT THE FORM IS NOT EMPTY
        if($firstname !="" AND $lastname !="" AND $gender!=""AND $country!="" AND $email!="" AND $age!=""){
            $sql_query = "INSERT INTO users(firstname, lastname, gender, email, country, age) VALUES('$firstname','$lastname','$gender','$email','$country','$age')";
            $query = mysqli_query($conn, $sql_query);

            if($query){
                $msg = "<span class='text-success'>Record Inserted..!</span>";
            }else{
                $msg = "<span class='text-danger'>MySQL error..!</span>";
            }
        }
        
    }

    // DELETE FROM TABLE
    if(isset($_POST['delete'])){
        $delete_id = $_POST['delete_id'];
        //echo $delete_id;
        $sql_query = "DELETE FROM users WHERE id='$delete_id'";
        $query = mysqli_query($conn, $sql_query);
        if($query){
            $del_msg = "<span class='text-success'>Record Deleted..!</span>";
        }else{
            $msg = "<span class='text-danger'>Could not be deleted</span>";
        }
    }

     // fetch data from database
     $sql_query = "SELECT * FROM users ORDER BY id DESC";
    $query = mysqli_query($conn, $sql_query);
    
    $table_results = mysqli_fetch_all($query, MYSQLI_ASSOC);
    /*
        // USE THIS TO FETCH SPECIFIC ROW OF DATA
        //$table_result = mysqli_fetch_assoc($query);
        $table_result = mysqli_fetch_array($query);
    */
    //print_r($table_results);
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
        <!-- beginning of records section -->
        <section id="records" class="bg-light my-5 p-2">
            <table class="table table-secondary border table-striped">
                <?php
                    if(!empty($del_msg)){
                        echo $del_msg;
                    }
                ?>
                <thead>
                    <tr>
                        <th>S/N</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Gender</th>
                        <th>Country</th>
                        <th>Email</th>
                        <th>Age</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <hr>
                    <?php
                        if($table_results){
                            $counter = 0;
                            foreach($table_results as $table_result => $user){
                                //print_r($user);
                                echo "<tr>";
                                echo "<td>".($counter + 1)."</td>";
                                echo "<td>".$user['firstname']."</td>";
                                echo "<td>".$user['lastname']."</td>";
                                echo "<td>".$user['gender']."</td>";
                                echo "<td>".$user['country']."</td>";
                                echo "<td>".$user['email']."</td>";
                                echo "<td>".$user['age']."</td>";
                                echo "<td><form action='index.php' method='POST'><input type='hidden' name='delete_id' value='".$user['id']."'><button class='btn btn-sm btn-danger' name='delete'>Delete</button></form></td>";
                                echo "<td><a href='edit.php?id=".$user['id']."' class='btn btn-primary btn-sm'>Edit</a></td>";
                                $counter ++;
                            }
                        }
                    ?>
                </tbody>
            </table>
        </section>
        <!-- end of records section -->
        <section id="upload" class="bg-white my-5 p-">
            <div class="row justify-content-center">
                <div class="col-md-7">
                    <div class="card">
                        <div class="card-header text-center text-muted">
                            <h4 class="card-title">Person Details</h4>
                        </div>
                        <div class="card-body">
                            <?php
                                if(!empty($msg)){
                                    echo $msg;
                                }
                            ?>
                            <!-- form goes in here -->
                            <form action="" method="post">
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <input type="text" name="firstname" placeholder="enter firstname" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <input type="text" name="lastname" placeholder="enter lastname" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <span class="fw-bold">Gender</span>:&nbsp;
                                            <input type="radio" name="gender" value="male">&nbsp;Male&nbsp;
                                            <input type="radio" name="gender" value="female">&nbsp;Female
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <select name="country" aria-placeholder="country" class="form-select">
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
                                            <input type="email" name="email" placeholder="enter email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <input type="number" name="age" placeholder="enter age" min="18" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-lg" name="submit">UPLOAD</button>
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