<?php

function registerUser($email) {
    echo $email . ' registered';
}

// registerUser('Brad');

function sum($sn1 = 4, $sn2 = 5) {
    return $sn1 + $sn2;
}

$number = sum();
echo $number;

$subtract = function($sn1, $sn2) {
    return $sn1 - $sn2;
};

// echo $subtract(10, 5);

$multiply = fn($sn1, $sn2) => $sn1 = $sn2;

echo $multiply(9,9);