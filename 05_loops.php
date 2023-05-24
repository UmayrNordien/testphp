<?php
//LOOPS
//execute condition until no longer met

// for ($x = 0; $x <= 10; $x ++) {
//     echo $x;
// }

//or 

// for ($x = 0; $x <= 10; $x ++) {
//     echo 'Number ' . $x . '<br>';
// }


//While Loop
/*while (codition) {
    //code to be executed
}
*/
// $x = 1;

// while($x <= 15) {
//     echo 'Number ' . $x . '<br>';
//     $x = $x + 1;
// }


//Do While Loop
/*
do {
    //code to be executed
} while (condition);

always execute the block of code once even 
if the condition is false
*/

// $x = 1;

// do {
//     echo 'Number ' . $x . '<br>';
//     $x++;
// } while($x <= 5);



//FOR EACH LOOP
//used for arrays

// $posts = ['First Post', 'Second Post', 'Third Post'];

// foreach($posts as $index => $posts) {
//     echo $index + 1 . ' - ' . $post . ' <br> ';
// };

$person = [
    [
    'first_name' => 'Brad',
    'last_name' => 'Traversy',
    'email' => 'brad"gmail.com',
    ],
    [
    'first_name' => 'Jane',
    'last_name' => 'Jones',
    'email' => 'jane@gmail.com',
    ],
    [
    'first_name' => 'John',
    'last_name' => 'B',
    'email' => 'johnb@gmail.com',
    ]
];

foreach($person[2] as $key => $value) {
    echo "$key - $value<br>";
}

