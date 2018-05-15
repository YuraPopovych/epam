<?php
/*
2)
You need to find out a unique value in array, you are given arrays:
[ 1, 1, 1, 2, 1, 1 ] => 2
[ 0, 0, 0.55, 0, 0 ] => 0.55
[3,1,5,3,7,4,1,5,7] => 4

 */

$ar1 = [ 1, 1, 1, 2, 1, 1 ];
$ar2 = [ 0, 0, 0.55, 0, 0 ];
$ar3 = [3,1,5,3,7,4,1,5,7] ;


function uniqueValue($array){
    for($i = 0; $i < count($array); $i++){
        if(is_float($array[$i])){
            settype($array[$i],"string");
            }
    }
    echo array_search(1,array_count_values($array)) . "<br>";
}

uniqueValue($ar1);
uniqueValue($ar2);
uniqueValue($ar3);





