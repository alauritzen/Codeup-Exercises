<?php

fwrite(STDOUT, "What is your drink of choice?\n");
$drink=trim(fgets(STDIN));
$total_bottles=5;
$bottles=$total_bottles;

while ($bottles > 0) {
    if ($bottles>2) {
        $new_number=$bottles-1;
        fwrite(STDOUT, "$bottles bottles of $drink on the wall, $bottles bottles of $drink. Take one down and pass it around, $new_number bottles of $drink on the wall.\n");
        $bottles--;
        usleep(500000);
    } else {
        fwrite(STDOUT, "$bottles bottles of $drink on the wall, $bottles bottles of $drink. Take one down and pass it around, $new_number bottle of $drink on the wall.\n");
        usleep(500000);
        $bottles--;

        fwrite(STDOUT, "$bottles bottle of $drink on the wall, $bottles bottle of $drink. Take one down and pass it around, no more bottles of $drink on the wall.\n");
        usleep(500000);
        
        fwrite(STDOUT, "No more bottles of $drink on the wall, no more bottles of $drink. Go to the store and buy some more, $total_bottles bottles of $drink on the wall.\n");
        $bottles = $total_bottles;
        usleep(500000);
    }
}