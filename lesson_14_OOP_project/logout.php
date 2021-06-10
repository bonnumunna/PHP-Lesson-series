<?php
    // Include the login class
    include('login.php');
    // Instantiate the Login Class into an object
    $logout = new Login($username, $password);
    // Call logout method
    $logout->logout();
?>