<?php


class Employee
{
    public function __construct(
        public string $name,
        public float $salary,
        public int $age
    ){}
}

$obj = new Employee("John Doe", 45000.00, 23);


var_dump($obj->name);
