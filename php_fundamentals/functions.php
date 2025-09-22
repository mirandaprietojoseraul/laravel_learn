<?php
//Basic function syntax

function sayHello() {
    echo "Hello!";
}

// Call the function
sayHello();

//Parameters and arguments

function greet($name) {
    echo "Hello, $name!";
}

greet("John");    // outputs: Hello, John!

// Multiple parameters
function add($a, $b) {
    return $a + $b;
}

$result = add(5, 3);    // returns: 8

//Return Values


function getStatus($score) {
    if ($score >= 75) {
        return "Passed";
    }

    return "Failed";
}

$status = getStatus(80);    // returns: "Passed"

//Default parameters values

function greet2($name = "Guest") {
    echo "Hello, $name!";
}

greet2();          // outputs: Hello, Guest!
greet2("John");    // outputs: Hello, John!

//Type declarations

function add2(int $a, int $b): int {
    return $a + $b;
}

function getUserName(array $user): string {
    return $user['name'];
}

//Anonymous Functions (Closures)

$greet = function($name) {
echo "Hello, $name!";
};

$greet("John");    // outputs: Hello, John!





