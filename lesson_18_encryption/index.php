<?php
    $string1 = "password";
    $string2 = "passworD@123";

    echo md5($string1); // This is irreversible except by some hacking software
    echo "<br>";
    echo base64_encode($string1); // This is reversible
    echo "<br>";
    echo crypt($string1, PASSWORD_BCRYPT); // using PHP default salt. This is irreversible
    echo "<br>";
    echo password_hash($string1, PASSWORD_BCRYPT); // changes everytime the page is refreshed
?>