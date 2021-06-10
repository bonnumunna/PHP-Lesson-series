<?php
    // WORKING WITH FILES IN PHP
    /*
     * Files manipulation is a very powerful feature in
     * PHP. 
     * We can create, delete, read from, write to, open and
     * lock files using the various PHP functions and commands.
     * 1. basename 
     * 2. dirname
     * 3. realpath
     * 4. is_file
     * 5. is_readable
     * 6. filesize
     * 6b. file_exists
     * 7. mkdir
     * 8. rmdir
     * 9. copy
     * 10. rename
     * 11. unlink
     * 12. file_get_contents
     * 13. file_put_contents
     * 14. fopen
     * 15. fread
     * 16. fwrite
     * 17. fclose
     * 18. flock
     * 19. fputcsv
     * 20. fgetcsv
     * 21. fgetc
     */
    
     $path0 = $_SERVER['SCRIPT_NAME'];
     $path = 'documents/myfolder/personal/letter.txt';
     // basename() will return the name of the file from the
     // file path.
    //  echo basename($path); 
    // echo basename($path0); 
    /*
     * We can also put a 2nd parameter, which is the delimeter
     * to remove the file extension. But be sure you know what
     * file type you are expecting. e.g if it is .php or .html
     */
    // echo basename($path0, '.php');

    // This will return the name of the containing folder
    // echo dirname($path)

    // This will return the absolute file path from the root directory (C://)
    // It must be in existence (Dont't test this with a hypothetical file)
    // echo realpath('test.txt');

    // This will check for the existence of a file or a
    // folder/directory. It return a boolean.
    // echo file_exists('myfolder');

    // Checks for the availability/existence of a (regular) file
    // echo is_file('test.txt');

    // It is always a good practice to first check if a file is
    // is readable before writing data to it.
    // echo is_readable('test.txt');

    // This will return the size of a file in bytes
    // echo filesize('test.txt');

    // This will create a folder inside the current folder where
    // the current script is running.
    // mkdir('users');

    // $name = 'anderson';
    // mkdir('users/'.$name);

    // This will remove 
    // rmdir('users');
    // unlink('file1.txt');
    // unlink('file.docx');



    // USING FILE GET/PUT CONTENTS AND READ/WRITE
    /*
     * Be careful to note that the fopen() and fwrite() function should
     * be used in conjuntion with the read/write operation
     * and NOT with the file get/put contents function
     */
    // $content = file_get_contents('file1.txt');
    // echo $content;

    // $msWord = 'Kelvin and Ekene came late today';
    // $wordContent = file_get_contents('file.docx');
    // $wordContent .= "<br>We have PHP classes on Tuesdays, Thursdays and Fridays";
    // file_put_contents('file.docx', $wordContent);

    // $getMsWord = file_get_contents('file.docx');
    // echo $getMsWord;
    /*
     * ASSIGNMENT
     * Using the register/login project, create a form with one text area and
     * a button. The form after submission should write a .txt file to the folder
     * of the user created during login. Check to varify that it works
     * 
     * 2. Then create a 'Close Account' button which will delete the user from
     * the database table and also delete the folder of the user created during
     * registeration.
     */

     /*
      * This will open a file on the read mode
      */
    //  $file = fopen('file1.txt', 'r');
    //  This will close a file after operating on it
    //  It is best practice to always close files after operating
    //  on them.
    // $file = fclose($file);
    // $fileString = fread($file,filesize('file.docx'));
    // $fileString = fread($file,filesize('file1.txt'));

    // echo $fileString;
    // fclose($file);

    /*
     * This will write strings into the file we open
     */
    // $file = fopen('file.docx', 'w');
    // $stringtxt = "We meet by 9am every class days.\n";
    // fwrite($file,$stringtxt);
    // // $stringtxt = "This is an old class\n";
    // // fwrite($file,$stringtxt);

    // fclose($file);

    // $file = fopen('file.docx', 'r+');
    
    // $stringNew = fread($file, filesize('file.docx'));
    // echo $stringNew;

    // FILE LOCKING
    // $handle = fopen('file.docx', 'r')

    // FPUTCSV()
    // $animals = array(
    //   ['cat', 'rat', 'dog', 'bat'],
    //   ['bull', 'horse', 'goat', 'elephant'],
    //   ['eagle', 'hawk', 'dove', 'parrot']
    // );

    // $handler = fopen('animals.txt', 'w');
    
    // foreach ($animals as $animal) {
    //   # code...
    //   fputcsv($handler, $animal, ',');
    // }

    // $handler = fopen('animals.txt', 'r');

    // $result = fgetcsv($handler, ',');
    // print_r($result);

    // fclose($handler);

    // ==== FILE TELL, SEEK AND REWIND ====
    // $file = fopen('animals.docx', 'r');
    // echo ftell($file);
    // echo "<br>";
    // echo fgetc($file);
    // echo "<br>";
    // fseek($file, 8, SEEK_CUR);
    // echo "<br>";
    // echo ftell($file);
    // echo "<br>";
    // echo fgetc($file);

    // rewind($file);
    // echo "<br>";
    // echo ftell($file);
    // echo fgetc($file);

// ==== COPY, DELETE AND RENAMING FILES ====//
// copy('animals.txt', 'mamals.docx');
// unlink('animals.txt');   
// rename('mamals.docx', 'animals.docx');

// if(is_executable('filename.exe')){
//   echo "This file is executable";
// }else{
//   echo "This file is not executable";
// }

// echo filetype("./users");

print_r(scandir("./myfolder"));
$arra = scandir("./myfolder");
for($i = 0; $i<count($arra); $i++){
  // echo $arra[$i]."<br>";
  unlink("./myfolder/".$arra[$i]);
}
if(filesize("./myfolder") == 0){
  echo "Successful Delete";
}
?>
