<?php

fwrite(STDOUT, "Enter a starting number.\n");
$begin=trim(fgets(STDIN));

fwrite(STDOUT, "Enter an ending number.\n");
$end=trim(fgets(STDIN));

fwrite(STDOUT, "Enter an increment.\n");
$increment=trim(fgets(STDIN));

if (!$increment || !ctype_digit($increment)) {
    $increment = 1;
}

if (!ctype_digit($begin) || !ctype_digit($end)) {
    $begin=1;
    $end=100;
} elseif ($end<$begin) {
        $temp=$end;
        $end=$begin;
        $begin=$temp;
    }

for ($i=$begin; $i<=$end; $i+=$increment) {
    fwrite(STDOUT, "$i\n");
}