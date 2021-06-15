<?php

$array = Array(
  'foo' => 5,
  'bar' => 12,
  'baz' => 8
);

function array_map_assoc( $callback , $array ){
  $r = array();
  foreach ($array as $key=>$value)
    $r[$key] = $callback($key,$value);
  return $r;
}


echo implode(',',array_map_assoc(function($k,$v){return "$k ($v)";},$array)). PHP_EOL;