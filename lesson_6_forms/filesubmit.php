<?php
    /* ================== UPLOADING FILES IN PHP ================== */
    /*
        PHP allows us to upload files from our form input fields of
        type="file". This can be a document such as MS Word, Excel,
        Ppt, PDF etc or picutres of formats like png, gif, jpeg etc
        or multimedia like audio mp3, WAV or video mp4, mpeg etc.

        These files can be processed using PHP to check for file size,
        file fidelity, file type etc.
        To upload a file, the $_FILES superglobal is employed.
        This holds an array of values indicating file source, type,
        error, filename etc.
    */

    if(isset($_POST['upload'])){
        $desc = $_POST['description'];
        $file = $_FILES['file'];
        // echo $desc;
        // echo "<br>";
        // print_r($file);
    //     echo "<br>";
        $fileName = $file['name'];
        $fileSize = $file['size'];
        // $fileSize = $_FILES['file']['size'];
        $oldLocation = $file['tmp_name'];
        $newLocation  = "./folder/".$fileName;


        // echo $fileName; // PROCESS THE NAME TO GET THE EXTENTION
        $name_array = explode('.', $fileName);
        echo "<br>";

        // print_r($name_array);
        $extension = end($name_array);
        // echo "<br>";
        // echo $extension;
       
        $allowed_files = array('png', 'jpg', 'jpeg', 'gif', 'mp4');
        $allowedSize = 204800;
        
        // CHECK IF FILE SIZE IS ALLOWED
        if($fileSize <= $allowedSize){
            // success on size
            // NEXT CHECK IF FILE TYPE IS ALLOWED
            if(in_array($extension, $allowed_files)){
                // success on file types
                  //  move_uploaded_file()
                if(move_uploaded_file($oldLocation, $newLocation)){
                    echo "<h1>File Uploaded Successfully.</h2><br>";
                    echo "FILE DESCRIPTION: ".$desc;
                }else{
                    echo "<script>alert('Could not upload file')</script>";
                }
            }else{
            echo "<script>alert('File type must be png, jpg, jpeg or gif');</script>";
            }
        }else{
            echo "<script>alert('File size is more than 200kb');</script>";
        }
        // END OF FILE CHECKING

     
    }
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>File Submission</title>
    </head>

    <body>
        <form action="filesubmit.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="file" id="">
            <br><br>
            <label for="description">Description:</label>
            <br>
            <textarea name="description" id="" cols="30" rows="10" placeholder="enter file description"></textarea>
            <br><br>
            <label for=""></label>
            <br>
            <button type="submit" name="upload">Upload</button>
        </form>
    </body>

    </html>