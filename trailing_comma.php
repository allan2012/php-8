<?php

// Function should allow trailing comma without error
function fn_with_params_trailing_comma(string $name,) {
    var_dump($name);
}

fn_with_params_trailing_comma("James");
