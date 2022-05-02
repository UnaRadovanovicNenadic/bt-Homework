<?php



$tree_height = 100;
$snail_per_day = 0;
$days = 0;


while ($snail_per_day < $tree_height) {

    $tree_height++;
    $snail_per_day+=3;
    $days++; 

    if ($snail_per_day >= $tree_height) {
        break;
    } else {
        echo "Day " . $days . ": the snail will climbe " . $snail_per_day . " cm and the tree hight will be " . $tree_height . " cm in height. <br>";
    }
}    
    echo "After " . $days . " days, the snail will climbe the tree which will have " . $tree_height . " cm in hight.";

   
?>