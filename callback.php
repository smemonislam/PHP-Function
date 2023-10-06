<?php

/**
 * 01.
 * Filter Positive Numbers: Create a callback function that filters an array to return only positive 
 * umbers.
 */

$numbers = [-1, 2, 0, 5, -3, 10];
// Solution 01 with coustom callback function
function coustomFilter($arr, $cb)
{
    $newArray = [];
    foreach ($arr as $value) {
        if ($cb($value)) {
            array_push($newArray, $value);
        }
    }

    return $newArray;
}

$positive = coustomFilter($numbers, function ($value) {
    return $value > 0;
});
// print_r($positive);

// Solution 02 built-in functions in php
$positiveNumber = array_filter($numbers, function ($numbersValue) {
    return $numbersValue > 0;
});
// print_r($positiveNumber);


/**
 * 02.
 * Filter Names by Length: Create a callback function that filters an array of names based on their length
 */

$names = ["John", "Alice", "Bob", "Eve", "Anna"];;



function filterLength($arr, $length)
{
    return array_filter($arr, function ($name) use ($length) {
        $wordLength = mb_strlen($name);
        return $wordLength == $length;
    });
}

$wordLength = filterLength($names, 4);
// print_r($wordLength);


/**
 * 03.
 * Calculate Total: Create a callback function that calculates the total sum of values in an array.
 */

$values = [2, 5, 8, 10];

$sum = array_reduce($values, function ($a, $b) {
    return $a + $b;
}, 0);

// echo $sum;


/**
 * 04.
 * Convert to Uppercase: Create a callback function that converts each element of an array to uppercase. 
 */

$words = ["apple", "banana", "cherry"];

$uppercase = array_map(function ($word) {
    return strtoupper($word);
}, $words);

// print_r($uppercase);


/**
 * 05.
 * Custom Sorting: Create a callback function that sorts an array of strings based on a custom sorting criteria 
 * e.g., string length).
 */
$strings = ["apple", "banana", "cherry", "date", "fig"];

function sortByAuthorName($arr1, $arr2)
{
    if (strlen($arr1) > strlen($arr2)) {
        return -1;
    } elseif (strlen($arr1) < strlen($arr2)) {
        return 1;
    } else {
        return 0;
    }
}

usort($strings, "sortByAuthorName");
// print_r($strings);


/**
 * 06.
 * Array Mapping: Create a callback function that maps each element of an array to a new value (e.g., 
 * square each number in the array). 
 */

$square = [2, 5, 8, 10];
function customMap($arr, $cb)
{
    $newArray = [];
    foreach ($arr as $value) {
        $newValue = $cb($value);
        array_push($newArray, $newValue);
    }
    return $newArray;
}

$sq = customMap($square, function ($value) {
    return $value * $value;
});

print_r($sq);
