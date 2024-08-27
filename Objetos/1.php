<?php

class Customer {
    public $name;
    private $age;
    
    static function adress() {
        var_dump(property_exists('Customer', 'age')); //true
    }
}

var_dump(property_exists('Customer', 'name')); //true
var_dump(property_exists(new Customer(), 'name')); //true
var_dump(property_exists('Customer', 'id')); //false
var_dump(property_exists('Customer', 'adress')); //false
Customer::adress(); // True
