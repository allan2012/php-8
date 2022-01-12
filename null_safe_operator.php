<?php

// Some understanding needed here or rather write more tests
// when using this feature

class Employee
{
    public function getAddress() {}
}

$employee = new Employee();

$department = $employee?->getAddress()?->dept?->iso_code;
var_dump($department);

$salary = $employee?->salary ?? null;
var_dump($salary);
