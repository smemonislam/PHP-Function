<?php

/**
 * Information can be passed to functions through arguments. An argument is just like a variable.
 * Arguments are passed while calling the function
 * Parameters are passed while defining the function
 * Here argument is “Jeny” & “Robert”
 * Here parameter is $fname
 */

/**
 * @ What can we do with parameters?
 * 1. parameter With rececive value 
 * 2. parameter With Default Value
 * 3. parameter With type decalared
 * 4. parameter With type Optional
 * 5. Multiple  With type decalared 
 */

/**
 * @ Function with Parameter
 * @ Syntax
 */

function function_name($para1, $para2, $para3, $para4, $para5)
{
    // Block of Statements
}

function_name($arg1, $arg2, $arg3, $arg4, $arg5);

function familyName($fname)
{
    echo "{$fname} colins.\n";
}

familyName("Jeny");
familyName("Robert");


/**
 * PHP FUNCTION MULTIPLE ARGUMENTS & PARAMETERS
 */


function Fruit($name, $price)
{
    echo "$price tk per kg of $name";
}
// Fruit("Apples", 220);

/**
 * @ PHP FUNCTION DEFAULT VALUE OF ARGUMENTS
 * @ Syntax
 */

function DefaultParameter($para1, $para2, $para3, $para4 = 50, $para5 = "value")
{
    // Block of Statements
}

DefaultParameter($arg1, $arg2, $arg3, $arg4, $arg5);

/**
 * @ Wrong Syntax with Default Parameter
 */
// function DefaultParameter($para1, $para2, $para3, $para4 = 50, $para5) // Wrong Syntax
// {
//     // Block of Statements
// }

// DefaultParameter($arg1, $arg2, $arg3, $arg4, $arg5);


function setHeight($minheight = 50)
{
    echo "The height is: $minheight\n";
}
setHeight(60);
setHeight();
