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
    } else  {
        echo $days . " day: the snail climbed " . $snail_per_day . " cm and the tree hight is " . $tree_height . " cm. <br>";
    }
}    
    echo "After " . $days . " days, the snail has climbed the tree which had " . $tree_height . " cm in hight at that moment.";

   
?>