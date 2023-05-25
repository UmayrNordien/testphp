<?php

//the ability to read and writ files on the server
//php has built in functions for reading/writing files on the server

$file = 'extras/users.txt';

//NON FLEXIBLE METHOD
// if(file_exists($file)) {
//     echo readfile($file);
// }

//FLEXIBLE METHOD
if(file_exists($file)) {
    $handle = fopen ($file, 'r'); //open the file for reading
    $contents = fread($handle, filesize($file));
    fclose($handle);
    echo $contents;
} else {
    $handle = fopoen($file, 'w');
    $contents = 'Brad' . PHP_EOL . 'Sara' . PHP_EOL . 'Mike';
    $fwrite($handle, $contents);
    fclose($handle);
};