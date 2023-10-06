<?php

/**
 * @ The variable which declared outside a function has a global scope. Its accessibility is just outside 
 * the function.
 */

$a = 10; // Global Variable
function display()
{
    // Below code will not work , Can't access $a outside the function
    // echo "Accessing value inside a function = $a"; // Warning: Undefined variable $a
}
display();


/**
 * If we want to access data outside a function from code inside a function we have to use global keyword
 * within the function
 */


$a = 10; // Global Variable
function displayGlobalVariable()
{
    global $a;
    echo "Accessing value inside a function = $a \n";
}
displayGlobalVariable();

echo "Accessing value outside function = $a \n";
