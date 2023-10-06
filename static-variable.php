<?php

/**
 * A variable within a function reset every time when we call it. If case we need, variable values to reamin 
 * save every outside the function the we have to use static variables
 */

// Normal function behaviour
function display()
{
    $a = 10;
    $a++;
    return $a;
}

echo display() . "\n";
echo display() . "\n";
echo display() . "\n";

// static variables behaviour
function displayStaticVariable()
{
    static $a = 10;
    $a++;
    return $a;
}

echo displayStaticVariable() . "\n";
echo displayStaticVariable() . "\n";
echo displayStaticVariable() . "\n";
