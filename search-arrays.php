<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

$query = "Tina";

function inCast($cast, $name) {
    if (array_search($name, $cast) !== FALSE) {
        return TRUE;
    } else {
        return FALSE;
    }
}
echo inCast($names, $query) . PHP_EOL;


function compareCast($cast, $comp) {
    $count=0;
    foreach ($cast as $castMember) {
        if (array_search($castMember, $comp) || array_search($castMember, $comp) === 0) {
            $count++;
        }
    }
    return $count;
}
echo compareCast($names, $compare) . PHP_EOL;