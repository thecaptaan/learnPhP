<?php
    $age = 20;
    if( $age > 18){
        echo "you are an adult";
    }else{
        echo "you are a child";
    }

    // Date and time
     // F is for full month name
    //j is for day of the month
    // Y is for year
    // l is for day of the week
    // h is for hour
    $t = date("H");
    if($t < "20"){
        echo "Have a good day!";
    }elseif($t < "12"){
        echo "Have a good morning!";
    }
    else{
        echo "Have a good night!";
    }

    $posts = ["post1", "post2", "post3", "post4", "post5"];

    if(!empty($posts)){
        echo "There are posts";
    }else{
    echo "There are no posts";
    }

    // ternary operator
    echo !empty($posts) ? $posts[0] :"No posts available";
    echo !empty($posts) ? $posts[0] : null;
    $firstPost = $posts[0] ?? null;

    $favColor = 'orangered';
    switch($favColor){
        case 'red':
            echo 'Your favorite color is red';
            break;
        case'blue':
            echo 'Your favorite color is blue';
            break;
        case 'green':
            echo 'Your favorite color is green';
            break;
        default:
            echo 'Your favorite color is something else';
            break;
    }
?>