<?php
// loops

// for loop
for($i = 0; $i <= 15; $i++){
    echo $x;
}

// while loop
$x = 1;
while ($x <= 5){
    echo $x;
    $x++;
}

// do while loop
$j = 1;
do{
    echo $j;
    $j++;
}while ($j <= 5);

// foreach loop
$posts = array('post1', 'post2', 'post3');
foreach ($posts as $post){
    echo $post;
}
foreach ($posts as $index => $post){
    echo $index;
    echo $post;
    echo "<br>";
}
$details = [
    ['name' => 'John', 'age' => 25],
    ['name' => 'Jane', 'age' => 30]
];
foreach ($details as $key => $detail){
    echo $key;
    echo $detail['name'];
    echo '<br>';
}
?>