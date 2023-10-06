<?php

function outer_function()
{
    // Block of statements
    function inner_function()
    {
        // Block of statements
    }
}

// We can't call inner function without calling outer function. First make call to  outer then inner.

function outer_display()
{
    echo "I am a outer function \n";
    function inner_display()
    {
        echo "I am a inner function \n";
    }
}

outer_display();
inner_display();
