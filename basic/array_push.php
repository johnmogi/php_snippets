<?php
$books = array('ji', 'lol');

array_push($books, 'killer');
// print_r($books);// Array ( [0] => ji [1] => lol [2] => killer )\\\
$books['added value'] = "new"; // prefered since it creates an array
print_r($books);