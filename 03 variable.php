// variable must be prefixed with a dollar sign ($)
// variable name must start with a letter or an underscore
// variable name cannot start with a number
// variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _)
// variable names are case-sensitive ($name and $NAME are two different variables)

<?php

$name = 'The Captaan';
$age = 21;
$relationship_status = 'Single';

echo $name, $age, $relationship_status;

// 1 way to parse variable in string

echo $name . ' is ' . $age . ' years old and ' . $relationship_status;

// 2 ways to parse variable in string
echo "$name is $age years old and $relationship_status";

//
$result = '5' + '5';
var_dump($result); // int(10)

// Math operations
echo 5 + 5; // 10
echo 5 - 5; // 0
echo 5 * 5; // 25
echo 5 / 5; // 1
echo 5 % 5; // 0
echo 5 ** 5; // 3125

// Constants
define('PI', 3.14);
define('HOST', 'localhost');
echo PI;
echo HOST;