<?php

// Function can take multiple input types
function display_length(int|float $length) {
    echo "The length is: {$length} <br />";
}

display_length(22.56);

display_length(10);

class Customer
{
    public function __toString(): string
    {
        return "I am the Customer class";
    }
}

class Employee
{
    public function __toString(): string
    {
        return "I am the Customer class";
    }
}

function which_class(Customer|Employee $obj) {
    echo $obj;
}

$obj = new Customer();

which_class($obj);
