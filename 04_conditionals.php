<?php

$age = 18;

// if($age >= 18) {
//     echo 'You  are eligible to vote';   
// } else {
//     echo 'Sorry, you are not old enough to vote';
// }


//date, hour
$t = date("F");

// echo $t;

// if($t < 12) {
//     echo 'Good Morning';
// } else if($t < 17) {
//     echo 'Good Afternoon';
// } else {
//     echo 'Good Evening';
// };

$posts = ['First Post'];

// if(!empty($posts)) {
//     echo $posts[0];
// } else {
//     echo 'No posts';
// }

//or

// echo !empty($posts) ? $posts[0] : 'No Posts'  //looking at condtiion ? if true echo state variable else no posts (if you have a ternary you must have an else)



//in the case of a bunch of else ifs then use a switch

$favcolor = 'red';  //can be used in a form input

switch($favcolor) {
    case 'red':
        echo 'you fav color is red';
        break;
    case 'blue':
        echo 'you fav color is blue';
        break;
    case 'green':
        echo 'you fav color is green';
        break;
default;   //if it doesnt match anny of the cases
        echo 'you fav color is not red, blue, or green';
};






?>
