<?php

/**
 * When you pass an argument by reference, that gives code in the function direct access to that
 * argument back in the calling code.
 */


$n = 2;
function add(&$a) // $n = $a = 2
{
    $a = 4; // $n = $a = 4  reassigned value
    echo "value inside function: {$a}\n";
}
add($n);
echo "value outside function: {$n}\n";
