<?php

readonly class MyReadOnlyClass
{
    // public static string $title;         // static properties cannot be readonly
    // public string $title = 'default';    // read only properties cannot have default

    public function __construct(public string $name, public int $age){}
}

$obj = new MyReadOnlyClass("Allan", 88);
var_dump($obj->name); // prints Allan
var_dump($obj->age); // prints 88

/**
 * You cannot override properties of a readonly class
 */
// $obj->name = "James";
// var_dump($obj->name);

/**
 * NON readonly class cannot extend readonly class
 */
//class ChildClass1 extends MyReadOnlyClass {}
