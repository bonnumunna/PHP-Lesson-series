<?php
if(isset($_POST['submit'])){
    // echo "You Clicked Submit Button";
    $fname = $_POST['firstName'];
    $lname = $_POST['lastName'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];

    // echo $fname."<br>".$lname."<br>".$gender."<br>".$country;

    // ==================== CHECKS AND VALIDATION =================

    /*
    =================== THE HEADER FUNCTION ======================
        The PHP header() function is used to redirect users from one
        page document to another. It accepts a string with keyword
        location, followed by a colon and the url of the desired 
        location.
        The syntax is header('location: root/register/reg.php');
        Programmers can include a URL query string to location URL
        after a question (?) mark to carry extra data along with 
        the re-direction.
    */
    header("Location: user.php?first_name=".$fname."&last_name=".$lname."&gender=".$gender."&country=".$country);

    // header("Location: user.php?first_name=$fname&last_name=$lname&gender=$gender&country=$country");

}

?>