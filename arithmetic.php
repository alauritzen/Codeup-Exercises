<?php


function checkNumber($a, $b)
{
    if (!is_numeric($a) && !is_numeric($b)) {
        return "$a and $b must both be numbers.\n";
    } else if (!is_numeric($a)) {
        return "$a must be a number.\n";
    } else if (!is_numeric($b)) {
        return "$b must be a number.\n";
    }
}

function add($a, $b)
{
    if (!is_numeric($a) || !is_numeric($b)) {
        return checkNumber($a,$b);
        return "NO!";
    } else {
        return $a + $b . PHP_EOL;
    }
}

function subtract($a, $b)
{
    if (!is_numeric($a) || !is_numeric($b)) {
        return checkNumber($a,$b);
    } else {
        return $a - $b . PHP_EOL;
    }
}

function multiply($a, $b)
{
    if (!is_numeric($a) || !is_numeric($b)) {
        return checkNumber($a,$b);
    } else {
        return $a * $b . PHP_EOL;
    }
}

function divide($a, $b)
{
    if (!is_numeric($a) || !is_numeric($b)) {
        return checkNumber($a,$b);
    }  elseif ($b==0) {
        return "You can't divide by $b! Are you crazy!?\n";
    } else {
        return $a / $b . PHP_EOL;
    }
}

function modulus ($a, $b)
{
    if (!is_numeric($a) || !is_numeric($b)) {
        return checkNumber($a,$b);
    } else {
        return $a % $b . PHP_EOL;
    }
}


echo add("Mogwai", "Food");
echo subtract(5, "Joel");
echo multiply("Paul", 6);
echo divide(12, 0);
echo modulus(12,"Gary");
