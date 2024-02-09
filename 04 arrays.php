<?php

// simple array
$numbers = [1, 2, 3, 4, 5];
$names = array('John', 'Amanda', 'Peter', 'Sally');

print_r($numbers);
print_r($names);

echo $names[1]; // Amanda

// associative array
$colors = [
    'red' => '#FF0000',
    'green' => '#00FF00',
    'blue' => '#0000FF'
];

echo $colors['red']; // #FF0000

// multi-dimensional array
$people = [
    ['name' => 'John', 'age' => 25],
    ['name' => 'Amanda', 'age' => 30],
    ['name' => 'Peter', 'age' => 20]
];
echo $people[1]['name']; // Amanda
?>