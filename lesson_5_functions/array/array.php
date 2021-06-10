<?php
/*
    Arrays are very important units of data storage. And as such PHP
    provides functions to manipulate arrays.
*/

//     $fileType = ["png", "jpg", "gif", "jpeg"];
//    /* in_array();  this will return boolean value.*/
    
//    if(in_array('pdf', $fileType)){
//        echo "File accepted";
//    }else{
//        echo "File not allowed";
//    }

// array_combine()
/*
    This will combine two arrays of equal length in to key-value
    pairs. i.e. an associative array.
*/
$students = ['Ade', 'Bola', 'Charles'];
$age = [12,23,14];

$combined = array_combine($age, $students);

// print_r($combined);


// array_pop
// This will bring out the last element in the array. And when the
// the array is printed on screen, it shorts by one (the last)
$cars = ["Audi","Benz", "Chevrolet","Ford"];

// echo array_pop($cars);
// echo "<br>";
// print_r($cars);

// array_push
// Is another way of programmatically adding to the elements of
// an array. Even though such elements don't exist in actual text.
// array_push($cars, 'Honda');
// array_push($cars, 'Hyndai');
// array_push($cars, 'Limosine');
// array_push($cars, 'Mazda');
// array_push($cars, 'Opel');
// array_push($cars, 'Peugeuot');
// array_push($cars, 'RollsRoyce');

// print_r($cars);

// $male = array('Amos','Barak','Dan');
// $female = ['Abigail', 'Beersheba','Deborah'];

// $merged = array_merge($male, $female);
// print_r($merged);

// list()
// This is used to list out the elements of an array with specific
// variable names as though they were simple variables
$str_item = "airbag,bag,comb,disk";
list($a, $b, $c, $d) = explode(',',$str_item);

// echo $c;
?>