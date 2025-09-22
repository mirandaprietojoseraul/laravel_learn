<?php
/*Types of arrays*/

// Numeric array
$colors = ['red', 'blue', 'green'];

// Associative array
$user = [
    'name' => 'John',
    'age' => 25
];

// Mixed array
$mixed = [
    42,                  // index 0
    'key' => 'value',    // key 'key'
    'another value'      // index 1
];

/*Creating arrays*/

// Modern syntax
$array1 = ['a', 'b', 'c'];

// Creating with specific keys
$user = [
    'name' => 'John',
    'age' => 25
];

/*Working with arrays*/

$colors = ['red', 'blue', 'green'];
echo $colors[0];    // outputs: red

$user = ['name' => 'John', 'age' => 25];
echo $user['name']; // outputs: John

/*Nested arrays (arreglos anidados)*/


$blogPost = [
    'title' => 'Getting Started with PHP',
    'author' => [
        'name' => 'John',
        'role' => 'editor'
    ],
    'comments' => [
        ['user' => 'Jane', 'text' => 'Great article!'],
        ['user' => 'Bob', 'text' => 'Thanks for sharing']
    ]
];

echo $blogPost['title'];                  // outputs: Getting Started with PHP
echo $blogPost['author']['name'];         // outputs: John
echo $blogPost['comments'][0]['text'];    // outputs: Great article!

/*Common operations*/


// Adding elements
$colors[] = 'yellow';           // Add to numeric array
$user['email'] = 'john@example.com';  // Add to associative array

// Checking elements
isset($user['email']);          // Check if key exists
in_array('red', $colors);       // Check if value exists

// Array size
count($colors);                 // Get number of elements

// Remove elements
unset($user['email']);          // Remove specific element

/*Real world example*/


$post = [
    'title' => 'Getting Started with PHP',
    'author' => [
        'name' => 'John Doe',
        'role' => 'editor'
    ],
    'tags' => ['php', 'beginner', 'tutorial'],
    'published' => true,
    'comments' => [
        [
            'user' => 'Jane',
            'message' => 'Great article!'
        ],
        [
            'user' => 'Mike',
            'message' => 'Thanks for sharing'
        ]
    ]
];