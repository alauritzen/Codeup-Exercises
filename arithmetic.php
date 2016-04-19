<?php

function add($a, $b)
{
    return $a + $b;
}

function subtract($a, $b)
{
    return $a - $b;
}

function multiply($a, $b)
{
    return $a * $b;
}

function divide($a, $b)
{
    return $a / $b;
}

echo "Adding 5+6 = " . add(5, 6) . "\n";
echo "Subtracting 5-6 = " . subtract(5, 6) . "\n";
echo "Multiplying 5*6 = " . multiply(5, 6) . "\n";
echo "Dividing 5/6 = " . divide(5, 6) . "\n";