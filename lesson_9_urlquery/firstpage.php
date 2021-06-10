<?php
    /*
        =============== URL QUERY STRING ================
        Sometimes users data can or any kind of data generated
        during a browsing session can be passed from one script
        file to another without neccesarily using either of cookies
        or sessions.
        This is achieved using url query string. It is a method of
        attaching a sequence of data keys and thier accompanying values to the main url.
        The beginning of a url query string is denoted by a question
        mark (?). This is followed by the first key, an equal (=),
        and the value.
        To add extra key-value pairs, the ampersand (&) is used for
        concatenation.
        NOTE: special ASCII values like spacebar are encoded with special characters.
        When the data fields are short, a programmer can manually
        type it (e.g header('loaton: next.com?user='danny55&pass=123')). However, when much data needs to be passed, it
        becomes neccessary to build the query string.
        NEVER PASS SENSITIVE DATA LIKE PASSWORDS, CREDIT CARD DETAILS VIA URL QUERY STRING.
    */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forst Page</title>
</head>
<?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $order = $_POST['order'];

        // echo "$name $order";

        // header("location: secondpage.php?name=$name&order=$order");

        // CREATE AN ASSOCIATIVE ARRAY OF KEY => VALUE PAIRS
        $fields = array(
            "name" => $name,
            "age" => 17,
            "email" => "a_onajite@gmail.com",
            "phone" => "09081253409",
            "order" => $order,
            "city" => "Warri",
            "State" => "Delta",
            "Country" => "Nigeria"
        );
        // $url = http_build_query($fields);
        // echo $url;
        // header('location: secondpage.php?'.$url);

        echo "<br>";
        // PARSING URL TO ITS COMPONENT FIELDS
        // $parsed_url = parse_url('http://localhost/phplesson3/urlquery/secondpage.php?name=Joy+Iteku&age=17&email=a_onajite%40gmail.com&phone=09081253409&order=Computer&city=Warri&State=Delta&Country=Nigeria');

        // print_r($parsed_url);
        // echo $parsed_url['query'];
        // PARSING THE STRING
        /* This will parse the url string to the component key-value
        fields, unlike the parse url which parsed to the various section of the query string i.e. scheme, host, query etc. */
        parse_str('http://localhost/phplesson3/urlquery/secondpage.php?name=Joy+Iteku&age=17&email=a_onajite%40gmail.com&phone=09081253409&order=Computer&city=Warri&State=Delta&Country=Nigeria', $output);

        
        print_r($output);
    }
?>
<body>
    <form action="firstpage.php" method="POST">
        <div>
            <label>Full name</label>
            <br>
            <input type="text" name="name" id="">
        </div>
        <br>
        <div>
            <label>Ordered Item</label><br>
            <select name="order" id="">
                <option value="">--select--</option>
                <option value="TV">TV</option>
                <option value="Mouse">Mouse</option>
                <option value="Computer">Computer</option>
                <option value="Laptop">Laptop</option>
            </select>
        </div>
        <br>
        <button type="submit" name="submit">SUBMIT</button>
    </form>
</body>
</html>