<?php

/**
 * @ Anonymous Functions, also known as closure or lambda, allow the creation of functions which 
 * have no specified name
 *      @ Can be stored in the variable
 *      @ Can be Returned in a function
 *      @ Can be pass in a function
 * 
 * @ Syntax: 
 */
function () {
    // Block of Statements
};


// @ Can be stored in the variable
$a = function () {
    echo "Anonymous Functions stored in the variable.";
};

// $a();

$y = 10; // Global variable
$display  = function () use ($y) {
    echo "Global Variables stored in the variable {$y}";
};
echo $display();


// @ Can be Returned in a function
$duplicates = [1, 2, 3, 3, 4, 4, 5, 5];
function r_duplicate($array)
{
    return array_filter($array, function ($value, $key) use ($array) {
        return array_search($value, $array) === $key;
    }, ARRAY_FILTER_USE_BOTH);
}
$result = r_duplicate($duplicates);



//  @ Can be pass in a function
$numbers = [-1, 2, 0, 5, -3, 10];
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
print_r($positive);
