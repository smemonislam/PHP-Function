<?php

/**
 * @ Return type Declaration
 * In PHP 7, a  new feature, Return type declaration specify the type of the value that will be returned from 
 * a function. To specify the return type, we add a colon and then valid type right before the opening curly 
 * brackets
 */

// Strict Type Declaration

// decalre(strict_types=1);

//  function add($a, $b): int {
//     return $a + $b;
//  }
//  echo add(2, 5); // output 7
//  echo add(2, 5.); // Type Error


// Coercive Type Declaration

//  function add($a, $b): int {
//     return $a + $b;
//  }
//  echo add(2, 5); // output 7
//  echo add(2, 5.2); // output 7


function add(float $a, float $b): int
{
    return $a + $b;
}
$returnType = add(5.2, 2.3);

echo $returnType . "\n"; // output 7
echo gettype($returnType) . "\n";
echo gettype($returnType) . "\n";


// No Return Type
function sub(float $a, float $b): void
{
    echo $a - $b;
}
sub(5.2, 2.3);
