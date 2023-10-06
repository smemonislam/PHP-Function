<?php

/**
 * @ Type Declartions simply means specifying which type of variable is being set instead of allowing
 * PHP to set this automatically. If given the value is of the incorrect type, then an error is generated
 */

/**
 * @ 1. Scalar type declaration
 * @ 2. Return type declaration
 * 
 * @ Type
 * 1. Class/interface
 * 2. self
 * 3. array
 * 4. callable
 * 5. int
 * 6. float
 * 7. string
 * 8. boolean
 * 9. iterable
 * 10. null
 */

/**
 * @ Scalar type declaration
 * =========================
 *      1. Coercive Type declaration
 *      2. Strict Type declaration
 */

/**
 * @ Coercive Type declaration
 * ===========================
 * @ Here it is possible to covert and strict mode is off
 */
function add(int $a, int $b)
{
    echo '$a is: ' . gettype($a) . " type variable and value = $a\n";
    echo '$b is: ' . gettype($b) . " type variable and value = $b\n";
    return $a + $b;
}
// echo add(2, 5); // output 7
// echo add(2, "5"); // output 7  // "7" string convert to integer (posible convert) because strict mode is off
// echo add(2.5, 3.2); // output 5 // 2.5 float conversion to integer (posible convert) because strict mode is off
// echo add(2, "Hello"); // Type Error


function sub(string $a, string $b)
{
    echo '$a is: ' . gettype($a) . " type variable and value = $a\n";
    echo '$b is: ' . gettype($b) . " type variable and value = $b\n";
    return $a - $b;
}

// sub(10, 5);


/**
 * @ Strict Type declaration
 * =========================
 * @ Here it is not possible to covert and strict mode is on
 * @ To enable strict mode, a single declare directive must be placed at the top the file. This means that the 
 * strictness of typing for scalars is configured on a per-file basis. This directive not only affects the type 
 * declarations of parameter, but also a function return type.
 */

// declare(strict_types=1); // enable strict mode
// function add(int $a, int $b )
// {
//     echo '$a is: ' . gettype($a) . " type variable and value = $a\n";
//     echo '$b is: ' . gettype($b) . " type variable and value = $b\n";
//     return $a + $b;
// }
// echo add(2, 5); // output 7
// echo add(2, "5"); // Type Error
// echo add(2.5, 3.2); // type Error
// echo add(2, "Hello"); // Type Error



/**
 * PHP FUNCTION MULTIPLE TYPE HINTING
 * ==================================
 */

// function sub(int|float $a, int|float $b)
// {
//     return ($a + $b);
// }
// echo sub(2, 3.2);


/**
 * PHP FUNCTION TYPE HINTING OPTIONAL
 * ==================================
 * @ ? or null 
 */

// function sub(?int $a, int|float $b)
// {
//     return ($a + $b);
// }
// echo sub(2, 3.2);