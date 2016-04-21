<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam', 'Norm', 'Eddie'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael', 'Norm'];

$query = "Bob";

function inCast($names, $query) {
    if (array_search($query, $names) !== FALSE) {
        return TRUE;
    } else {
        return FALSE;
    }
}
// echo inCast($names, $query) . PHP_EOL;


function compareCast($names, $compare) {
    $count=0;
    foreach ($names as $castMember) {
        if (inCast($compare, $castMember)) {
            $count++;
        }
    }
    return $count;
    }
// echo compareCast($names, $compare) . PHP_EOL;

function combine_arrays($names, $compare) {
    $combined = [];
    foreach($names as $index => $castMember) {
        if (inCast($compare, $castMember)) {
            $combined[] = $castMember; 
        } else {
            // $i=array_search($castMember, $names);
            array_push ($combined, $castMember, $compare[array_search($castMember, $names)]);
        }
    }

    return $combined;

} 

var_dump(combine_arrays($names, $compare));