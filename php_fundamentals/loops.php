<?php

//Foreach


$colors = ['red', 'blue', 'green'];

foreach ($colors as $color) {
    echo $color;
}

// Or...
$invoiceItems = [
    ['item' => 'Laptop', 'price' => 1200],
    ['item' => 'Mouse', 'price' => 75],
    ['item' => 'Keyboard', 'price' => 100]
];

$total = 0;
foreach ($invoiceItems as $item) {
    $total += $item['price']; // shortcut for $total = $total + $item['price'];
}

//For

for ($i = 0; $i < 5; $i++) {
    echo $i;
}

// Counting backwards (like for a countdown)
for ($i = 10; $i > 0; $i--) {
    echo "$i seconds remaining...";
}

//While and Do while

$count = 0;
while ($count < 5) {
    echo $count;

    $count++;
}

// Do-while executes at least once
do {
    echo $count;
    $count++;
} while ($count < 5);

//Breaking and continuing

$users = [
    ['name' => 'John', 'newsletter' => true],
    ['name' => 'Jane', 'newsletter' => false],
    ['name' => 'Bob', 'newsletter' => true]
];

foreach ($users as $user) {
    if (!$user['newsletter']) {
        continue;    // Skip users who didn't subscribe
    }

    sendNewsletter($user);
}

// Simple break example
$numbers = [1, 2, 3, 4, 5];
foreach ($numbers as $number) {
    if ($number === 3) {
        break;    // Stop the loop
    }
    echo $number;
}

//A Glimpse into Laravel Collections

// Regular PHP loop
$numbers = [1, 2, 3, 4, 5];
$doubled = [];

foreach ($numbers as $number) {
    $doubled[] = $number * 2;
}

// With Laravel Collections
$doubled = collect([1, 2, 3, 4, 5])->map(fn($number) => $number * 2);

//Another example showing more Collection power


$users = collect([
    ['name' => 'John', 'active' => false],
    ['name' => 'Jane', 'active' => true],
    ['name' => 'Bob', 'active' => true]
]);

$users
    ->filter(fn($user) => $user['active'])
    ->each(fn($user) => User::create($user));

