<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam', 'Norm'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael', 'Norm', 'Eddie'];

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
    if (count($names) >= count($compare)) {
        $arrayOne = $names;
        $arrayTwo = $compare;
    } else {
        $arrayOne = $compare;
        $arrayTwo = $names;
    }

    print_r ($arrayOne);
    print_r ($arrayTwo);


    $combined = [];
    foreach($arrayOne as $index => $castMember) {
        if (inCast($arrayTwo, $castMember)) {
            $combined[] = $castMember; 
        } else {
            // $i=array_search($castMember, $arrayOne);
            array_push ($combined, $castMember); 
            if (isset($arrayTwo[$index])) {
                array_push ($combined, $arrayTwo[$index]);
             }
        }
    }

    return $combined;

} 

print_r(combine_arrays($names, $compare));