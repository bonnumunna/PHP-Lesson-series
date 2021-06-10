<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: arial, sans-serif;
            font-size: 15px;
            line-height: 1.6em;
        }
        
        .container {
            width: 80%;
            margin: auto;
            background-color: #e4e4e4;
            padding: 15px;
        }
        
        .btn {
            text-decoration: none;
            color: #fff;
            background-color: dodgerblue;
            padding: 10px 20px;
            border-radius: 10px;
        }
        
        table {
            width: 100%;
        }
        
        table,
        tr,
        td,
        th {
            border: 1px black solid;
        }
        
        td,
        th {
            padding: 7px;
        }
        
        footer {
            background-color: #000;
            padding: 10px;
            color: #fff;
            margin-top: 20px;
        }
        
        footer #end {
            display: flex;
            justify-content: center;
        }
        
        footer #end li {
            list-style: none;
            padding: 5px;
            border-right: 1px #f09707 solid;
        }
        
        footer #end li a {
            color: #fff;
        }
        
        @media (max-width: 425px) {
            .container {
                width: 95%;
                padding: 5px;
            }
            td,
            th {
                padding: 2px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h3>Dear
            <?php echo "{$name}"; ?>,</h3>
        <p>Thank you for registering with us. Kindly click the link below to activate your account. If your browser does not support this action, you can copy and paste the URL on your browser address bar.</p>
        <a href="http://www.yahoo.com" target="_blank" class="btn">Activate Account</a>

        <h3>Product Details:</h3>
        <table>
            <thead>
                <tr>
                    <th>FEATURES</th>
                    <th>WINDOWS</th>
                    <th>MAC</th>
                    <th>LINUX</th>
                </tr>
                <tr>
                    <th>Memory</th>
                    <td>156MB</td>
                    <td>98MB</td>
                    <td>120MB</td>
                </tr>
                <tr>
                    <th>Processor Speed</th>
                    <td>2.2GHz</td>
                    <td>2.0GHz</td>
                    <td>1.7GHz</td>
                </tr>
                <tr>
                    <th>Max Download</th>
                    <td>Unlimited</td>
                    <td>20</td>
                    <td>Unlimited</td>
                </tr>
                <tr>
                    <th>Price</th>
                    <td>Free</td>
                    <td>$7.50</td>
                    <td>Free</td>
                </tr>
            </thead>
        </table>
        <small><b>NOTE:</b>Please do not reply to this message. Source does not accept emails.</small>
        <footer>
            <div id="end">
                <li><a href="#">Unsubscribe</a></li>
                <li><a href="#">Terms & Condition</a></li>
                <li><a href="#">About</a></li>
            </div>
            <p>SanCassia&reg; Designs&trade; &copy; 2022</p>
        </footer>
    </div>
</body>

</html>