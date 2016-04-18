<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

foreach ($things as $item) {
    if (is_int($item)) {
        echo "Array item $item is an integer.";
    if (is_float($item)) {
        echo "Array item $item is a floating number.";
    if (is_bool($item)) {
        echo "Array item $item is boolean.";
    if (is_array($item)) {
        echo "Array item $item is an array.";
    if (is_null($item)) {
        echo "Array item $item is a null item.";
    if (is_string($item)) {
        echo "Array item $item is a string.";
    }
}