<?php
    /* ========== ENCODING AND DECODING ========= */
    /*
        To support JSON in a PHP web application, PHP provides the following functions.
        json_encode()
        json_decode()

    */
    $script = array(
        'Client-side' => 'JavaScript and TypeScript',
        'Server-side' => 'PHP, NodeJS and ASP.NET'
    );

    // echo json_encode($script);
    $json = '{
        "Client-side": "JavaScript and TypeScript",
        "Server-side": "PHP, Python and NodeJS"
    }';

    $decoded_json = json_decode($json);
    echo $decoded_json->{'Server-side'};
?>