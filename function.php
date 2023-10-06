<?php

/**
 * A function is a block of statements that can be used repeatedly in a program.
 * A function will not execute automatically when a page loads.
 * A function will be executed by a call to the function.
 */


/**
 * Why Use function ?
 * @ Esay to Debug
 * @ Resusibility
 * @ No Code Repetition
 * @ Easy to handle codes
 */



/**
 * @ Creating Function]
 * @ Syntax:
 */

function functionName() // Function Defination
{
    // Block of Statement
}

// functionName(); // function Calling OR function Invoke


// for ($i = 0; $i < 5; $i++) { // apu
//     echo $i . "\n";
// }

// for ($i = 0; $i < 10; $i++) { // husband
//     echo $i . "\n";
// }

// for ($i = 0; $i < 20; $i++) { // son
//     echo $i . "\n";
// }


function functionName1($num)
{
    for ($i = 1; $i <= $num; $i++) {
        echo $i . "\n";
    }
}

functionName1(2); // function calling or invoke
functionName1(3);
functionName1(5);
