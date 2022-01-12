<?php

$numbers = [3,1,0,4,7,2];

// Order of named parameters can be random
$filtered_array = array_filter(callback: function($var){
    return $var > 2;
}, array: $numbers);

print_r($filtered_array);
