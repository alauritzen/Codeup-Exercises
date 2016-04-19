<?php

$a=100;
$b=50;

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

function modulus ($a, $b)
{
    return $a % $b;
}

echo "Adding 5+6 = " . add(5, 6) . "\n";
echo "Subtracting 5-6 = " . subtract(5, 6) . "\n";
echo "Multiplying 5*6 = " . multiply(5, 6) . "\n";
echo "Dividing 12/6 = " . divide(12, 6) . "\n";
echo "Modulus 12/11 = " . modulus(12,11) . "\n";

echo "Global variables 100, 50 passed to add function = " . add($a,$b) . "\n";