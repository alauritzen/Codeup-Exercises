<?php

$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

$physicistsArray = explode(', ', $physicistsString);

// print_r($physicistsString) . PHP_EOL;
// print_r($physicistsArray) . PHP_EOL;


// echo "Some of the most famous fictional theoretical physicists are {$physicistsString}.\n";

function humanizedList($array, $sort = false) {
    if ($sort) {
        sort($array);
    }
    $lastPhysicist = array_pop($array);

    return implode(", ", $array) . ", and " . $lastPhysicist . ".";
}

echo "Some of the most famous fictional theoretical physicists are " . humanizedList($physicistsArray, true) . PHP_EOL;