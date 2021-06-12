<?php

$authors = array('poo', 'miller');

$new_list = array(
    'first' => 'jo',
    'second' => 'me',
    'last' => 'bye'
);

// $lastVal = array_pop($authors);

// echo $lastVal;
// print_r ($authors);

// unset($authors[1], $authors[0]); /// Array ( )
// unset($new_list['second']);
// print_r ($new_list); // Array ( [first] => jo [last] => bye )

ksort($new_list); // asort etc - good for associative arrays and keeps values intact
print_r ($new_list);