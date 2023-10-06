<?php

/**
 * 01. 
 * Filter Positive Numbers: Create a callback function that filters an array to return only positive numbers.
 */

$numbers = [-1, 3, -2, 5, 0, 4];

$numbers2 = [1, 2, 3, 4, 5, 6, 7, 8, 9];

function coustomFilter($array, $cb)
{
    $newArray = array();

    // for ($i = 0; $i < count($array); $i++) {
    //     if ($cb($array[$i])) {
    //         array_push($newArray, $array[$i]);
    //     }
    // }

    foreach ($array as $item) {
        if ($cb($item)) {
            array_push($newArray, $item);
        }
    }

    return $newArray;
}

$positive = coustomFilter($numbers, function ($value) {
    return $value > 0;
});

// print_r($positive);


// /**
//  * $array[0]  false
//  * $array[1]  true
//  */

// $negative = coustomFilter($numbers, function ($value) {
//     return $value < 0;
// });

// print_r($negative);



// $abc = array_filter($numbers, function ($value) {
//     return $value > 0;
// });


// print_r($abc);


// $evenNumber = coustomFilter($numbers2, function ($value) {
//     return $value % 2 === 0;
// });

// print_r($evenNumber);


/**
 * 06.
 * Array Mapping: Create a callback function that maps each element of an array to 
 * a new value (e.g., square each number in the array).
 */

$numbers3 = [1, 2, 3, 4, 5, 6, 7, 8, 9];
// $newAray = [];
// for ($i = 0; $i < count($numbers3); $i++) {
//     $square = $numbers3[$i] * $numbers3[$i];
//     array_push($newAray, $square);
// }

// print_r($newAray);


function CustomMap(array $array, $cb)
{
    $newAray = [];
    foreach ($array as $item) {
        $square = $cb($item);
        array_push($newAray, $square);
    }

    return $newAray;
}

$square = CustomMap($numbers3, function ($value) {
    return $value * $value;
});

$cube = CustomMap($numbers3, function ($value) {
    return $value * $value * $value;
});

$sq = array_map(function ($value) {
    return $value * $value;
}, $numbers3);

// print_r($sq);


// $numbers4 = [1, 2, 3, 4, 5];

// // Define a callback function to square each element
// function square(&$value, $key)
// {
//     $value = $value * $value;
// }

// // Apply the callback to each element of the array
// array_walk($numbers4, 'square');

// print_r($numbers4);
