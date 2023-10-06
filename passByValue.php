<?php

/**
 * @ By default function arguments are pass by value (so taht if the value of the argument within the
 * function is changed, it doesn't get changed outside of the function). When you pass data to a function,
 * a copy of data is passed. For example if you pass a variable, a copy is made of that variable and that copy
 * is actually passed to the function
 */

$n = 2;
function add($a) // $n = $a = 2
{
    echo "value inside function: {$a}\n";
    $a = 4; // $n = $a = 4  reassigned value
    echo "value inside function: {$a}\n";
}
add($n);
echo "value outside function:: {$n}\n";
