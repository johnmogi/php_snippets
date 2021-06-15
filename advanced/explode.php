<?php
$str = "Hello world. It's a beautiful day.";
// print_r (explode(" ",$str));// [0] => Hello[1] => world.[2] => It's[3] => a[4] => beautiful[5] => day.
// echo (explode(" ",$str)); //Array to string conversion in /home/johnmogi/Desktop/php/php_snippets/advanced/explode.php on line 4

$str = 'one,two,three,four';

// zero limit
print_r(explode(',',$str,0)); //[0] => one,two,three,four

// positive limit
print_r(explode(',',$str,2)); //[0] => one [1] => two,three,four

// negative limit
print_r(explode(',',$str,-1));  // [0] => one [1] => two [2] => three

// ok then explode breaks a string into an array, you can also design the way it's done.
// the first string is the seperator.
// the second param is the array.
// the third is the amount of objects in the array, 0 and -1 are the most logical.