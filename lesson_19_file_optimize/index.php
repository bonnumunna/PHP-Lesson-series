<?php
// Performing file compression
    // Instantiate the ZipArchive 
    $zip = new ZipArchive();
    $zip->open('compressed.zip', ZIPARCHIVE::CREATE);
    $zip->addFile('./resource/a.jpg', 'picture1.jpg');
    $zip->addFile('./resource/b.jpg', 'picture2.jpg');
    $zip->addFile('./resource/c.jpg', 'picture3.jpg');
    $zip->addFile('./resource/d.jpg', 'picture4.jpg');
    $zip->addFile('./resource/e.jpg', 'picture5.jpg');
    $zip->addFile('./resource/f.jpg', 'picture6.jpg');
    $zip->close();
?>