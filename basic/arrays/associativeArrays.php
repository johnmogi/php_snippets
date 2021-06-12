<?php

$my_list = array( 
    'first_key' => 'john',
    'last_key' => 'mogi',
    14 => 'dev',
    "no key value"
);

// print_r($my_list);

// echo $my_list['last_key'];

// echo array_key_exists('last_key', $my_list);

// echo in_array('mogi', $my_list); // 1
echo in_array('dev', $my_list , true);