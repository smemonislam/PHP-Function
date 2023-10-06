<?php

/**
 * @ A return statement may be return any type data, including arrays and objects.
 * @ Syntax: return (variable or expression)
 * @ Ex: return (3)
 *       return ($x + $y)
 *       return ($y)
 *       return (1, 2) Can't return multiple values 
 */


/**
 * What are the benefits of functions in PHP?
 * @ Code Organization
 * @ Reusability
 * @ Abstraction
 * @ Modularity
 * @ Maintenance
 */

// Syntax: 
function function_name()
{
    // Block of statements
    // return (variable or expression);
}

// function testReturn()
// {
//     $newArray = array();
//     for ($i = 0; $i <= 20; $i++) {
//         if ($i % 2 == 0) {
//             array_push($newArray, $i);
//         }
//     }
//     return $newArray;
// }

// $storeReturnValue = testReturn();


$annoymusFunction = function () {
    $newArray = array();
    for ($i = 0; $i <= 20; $i++) {
        if ($i % 2 == 0) {
            array_push($newArray, $i);
        }
    }
    return $newArray;
};

foreach ($annoymusFunction() as $value) {
    echo $value . "\n";
}
