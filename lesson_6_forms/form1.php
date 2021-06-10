<html>
<header>
    <title>Submit Form</title>
</header>
<body>
    <form action="process.php" method="POST">
        <br>
        <input type="text" name="firstName" required  placeholder="enter first name">
        <br><br>
        <input type="text" name="lastName" required placeholder="enter last name">
        <br><br>
        <select name="gender" id="" required>
            <option value="">--Select Gender--</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>
        <br><br>
        <?php //require_once("./countries.php") ?>
        <select name="country" id="" required>
            <option value="">--Select Country--</option>
            <?php
                require_once("./countries.php");
                foreach ($countries as $country) {
                    echo "<option value='".$country."'>".$country."</option>";
                    // echo "<option value='$country'>$country</option>";
                }
            ?>
            
        </select>
        <br><br>
        <input type="submit" name="submit" value="SUBMIT">
    </form>
</body>
</html>