<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

foreach ($things as $item) {
    if (is_int($item)) {
        echo "Array item $item is an integer.\n";
    }
    if (is_float($item)) {
        echo "Array item $item is a floating number.\n";
    }
    if (is_bool($item)) {
        echo "Array item is boolean.\n";
    }
    if (is_array($item)) {
        echo "Array item is also an array.\n";
    }
    if (is_null($item)) {
        echo "Array item is a null item.\n";
    }
    if (is_string($item)) {
        echo "Array item $item is a string.\n";
    }
}

foreach ($things as $item) {
    if (is_scalar($item)) {
        echo "Array item $item is scalar.\n";
    }
}

foreach ($things as $item) {
    if (is_array($item)) {
        foreach ($item as $part) {
            echo "$part\n";
        }
    } else {
        echo "$item\n";
    }
}