<?php
/*
2)
You need to find out a unique value in array, you are given arrays:
[ 1, 1, 1, 2, 1, 1 ] => 2
[ 0, 0, 0.55, 0, 0 ] => 0.55
[3,1,5,3,7,4,1,5,7] => 4
 */
function uniqueValue($array)
{
    /*$ar1 = [ 1, 1, 1, 2, 1, 1 ];
    $ar2 = [ 0, 0, 0.55, 0, 0 ];
    $ar3 = [3,1,5,3,7,4,1,5,7] ;*/
    if (!is_array($array)) {
        return "Only array values allowed!";
    }
    if (count($array) == 0) {
        return "Void array is not allowed!";
    }
    for ($i = 0; $i < count($array); $i++) {
        if (is_float($array[$i])) {
            settype($array[$i], "string");
        }
    }
    return array_search(1, array_count_values($array));
}
/*
uniqueValue($ar1);
uniqueValue($ar2);
uniqueValue($ar3);*/

/*$ar1ValFreq = array_count_values($ar1);
echo array_search(1, settype($ar1ValFreq,"string"));

$ar2ValFreq = array_count_values($ar2);
echo array_search(1, settype($ar2ValFreq,"string"));

$ar3ValFreq = array_count_values($ar3);
echo array_search(1, $ar3ValFreq);*/





