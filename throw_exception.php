<?php

function divide(int $a, int $b): float {
    if ($b == 0) {
        // You can throw an exception within any expression
        throw new Exception("Can't divide by 0");
    }
    return $a / $b;
}

var_dump(divide(100,0));
