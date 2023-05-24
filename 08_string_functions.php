<?php

$string = 'Hello World';
$string2 = 'this is a sentence';

//length of a string
echo strlen($string);

echo '<br>';

//find postiion of the first occurrence of a substring in a string
echo strpos($string, 'o');

echo '<br>';

//find postiion of the last occurrence of a substring in a string
echo strrpos($string, 'o');

echo '<br>';

//reverse a string
echo strrev($string);

echo '<br>';

//convert all characters to lowercase
echo strtolower($string);

echo '<br>';

//convert all characters to UPPERCASE
echo strtoupper($string);

echo '<br>';

//UPPERCASE each word
echo ucwords($string2);

echo '<br>';

//string replace
echo str_replace('World', 'Everyone', $string);
echo str_replace('a', 'REPLACEMENT', $string2);

echo '<br>';

//return portion of a string specified by the offset and length
echo substr($string, 0,5);
echo substr($string, 5,10); //can be written like echo substr($string, 5);

echo '<br>';

//starts with
if (str_starts_with($string, 'Hello')) {
    echo 'YES';
}

echo "<br>";

//ends with
if (str_ends_with($string, 'ld')) {
    echo 'YES';
}

echo "<br>";

// $string3 = '<h1>Hello</h1>';
// echo $string3;

$string3 = '<script>alert(1)</script>';
echo htmlspecialchars($string3);

printf('%s likes to %s', 'Brad', 'code');
printf('1+1=%f', 1+1);

echo "<br>";

