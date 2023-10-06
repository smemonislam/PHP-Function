<?php

/**
 * @ The variable which declared inside a function has a local scope. Its value remains valid just within
 * the function.
 */


function display()
{
    $a = 10; // Local Variable
    echo "Accessing value inside a function = $a";
}
display();

// Below code will not work , Can't access $a outside the function
// echo "Accessing value outside a function = $a"; // Warning: Undefined variable $a