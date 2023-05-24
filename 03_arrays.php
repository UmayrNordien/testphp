<?php
//Simple Array
$numbers = [1,44,55,22];
$fruits = array('apple', 'orange', 'pear');

//var_dump($numbers);
// echo $fruits[2];

//Associative Array
$colors = [
    1 => 'red',
    4 => 'blue',
    6 => 'green'
];

// echo $colors[4];

$hex = [
    'red' => '#f00',
    'blue' => '#0f0',
    'green' => '#00f'
];

// echo $hex['blue'];

$people = [
    [
    'first_name' => 'Brad',
    'last_name' => 'Traversy',
    'email' => 'brad@gmail.com'
    ],
    [
    'first_name' => 'Jane',
    'last_name' => 'Jones',
    'email' => 'jane@gmail.com'
    ]
];

// echo $people[1]['first_name'];
var_dump(json_encode($people[1])); 