<?php

class Employee
{
    public function __toString(): string
    {
        return "Employee class";
    }
}


$foo = new Employee();

var_dump($foo::class);
