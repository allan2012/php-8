<?php

function enabled(bool $state) : true {
    return $state; // return MUST always be true
}
var_dump(enabled(true));
// var_dump(enabled(false)); //Fatal error: Uncaught TypeError: isEnabled(): Return value must be of type true

function falsy(bool $state) : false {
    return $state; // return MUST always be false
}

var_dump(falsy(false));
// var_dump(falsy(true)); //Fatal error: Uncaught TypeError: falsy(): Return value must be of type false

function nullable($state) : null {
    return $state; // return MUST always be null
}

var_dump(nullable(null));
// var_dump(nullable(123)); //Fatal error: Uncaught TypeError: nullable(): Return value must be of type null, int returned

