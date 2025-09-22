<?php
//General

$status = 404;  // integer

$status = "active"; // string

$status = true; // boolean

//Strings

$name = 'John'; // John
$greeting = "Hello $name";    // Hello John
$greeting = 'Hello $name';    // Hello $name

// You can chain multiple strings
$fullName = 'John' . ' ' . 'Doe';   // Results in: John Doe

//Numbers

$age = 25;           // Integer
$price = 19.99;      // Float (also called double)

//Booleans

$isActive = true;
$isDeleted = false;

//Type Casting

$price = "19.99";    // string
$age = (int) $price;   // converts to 19
$isActive = (bool) 1;  // converts to true
$text = (string) 42;   // converts to "42"

//Automatic Type Coercion like Javascript

$result = "123" + 456;    // "123" becomes integer, result is 579
$sum = 42 . " items";     // 42 becomes string "42 items"
if ("hello") {            // string is coerced to true
    // this runs
}

