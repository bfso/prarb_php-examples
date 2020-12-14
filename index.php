<?php

include('app/P1/Post3.php');
use App\P1\Post3;


$tree = Post3::handle(3);

foreach ($tree as $row){
    echo $row;
    echo "<br>";
}

print_r($tree);