<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

$query = "Bob";

$isFound = array_search ($query, $names);

if ($isFound) {
    echo "True\n";
} else {
    echo "False\n";
}