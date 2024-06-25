<?php

class myClass {
    public $name;
    private $age;
    static protected $test;

    static function adress() {
        var_dump(property_exists('myClass', 'age')); //true
    }
}

var_dump(property_exists('myClass', 'name')); //true
var_dump(property_exists(new myClass, 'name')); //true
var_dump(property_exists('myClass', 'age')); //true
var_dump(property_exists('myClass', 'Branch')); //false
var_dump(property_exists('myClass', 'adress')); //true
myClass::adress();