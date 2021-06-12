<?php

$q = "To be or not to be, That the Question. ";

// $q = strtoupper($q);
// $q = strtolower($q);

// $length = strlen($q);
// echo $length;

// echo strpos($q, 'be', 10);
// echo strpos($q, 'Q');

// $replace = str_replace("be", "know", $q, $count);

// // $restart_from_pos = substr($q, -15);
// $restart_from_posandEnd = substr($q, 4, -15);

// echo $replace;
// echo $count;
// echo $restart_from_posandEnd;

$varArr = str_split($q ,8 );

print_r($varArr); // print_r - in  a human readable form