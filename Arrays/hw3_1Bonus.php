<?php

/*
1)You are going to be given an array of integers.
Your job is to take that array and find an index N where the sum of the integers to the left of N is equal to the sum of the integers to the right of N.
If there is no index that would make this happen, return -1.

For example:
Let's say you are given the array [1,2,3,4,3,2,1] -
Your function will return the index 3, because at the 3rd position of the array,
the sum of left side of the index ([1,2,3]) and the sum of the right side of the index ([3,2,1]) both equal 6.
[1,100,50,-51,1,1] - Your function will return the index 1,
because at the 1st position of the array, the sum of left side of the index ([1])
and the sum of the right side of the index ([50,-51,1,1]) both equal 1.

You need to test the solution on the next arrays:
[20,10,-80,10,10,15,35]
[10,-80,10,10,15,35]


 */

$ar = [1,2,3,4,3,2,1];
$ar2 =[1,100,50,-51,1,1];
$ar3 = [20,10,-80,10,10,15,35];
$ar4 =[10,-80,10,10,15,35];



#left sum
function arraySumLeft($array)
{
    $sumLeft = $array;

    for ($i = 0; $i < count($sumLeft); $i++) {
        $sumLeft[$i] = null;
    }

    for ($i = 1; $i < count($sumLeft); $i++) {
        for ($n = 0; $n < $i; $n++) {
            $sumLeft[$i] += $array[$n];
        }
    }
    return $sumLeft;
}


#right sum
function arraySumRight($array)
{
    $sumRight = $array;
    for ($i = 0; $i < count($sumRight); $i++) {
        $sumRight[$i] = null;
    }

    for ($i = (count($sumRight)) - 1; $i > 0; $i--) {
        for ($n = count($sumRight) - 1; $n > $i; $n--) {
            $sumRight[$i] += $array[$n];
        }
    }
    return $sumRight;
}

#equal index check
function indexEqualSum($leftSum, $rightSum){
    $a = null;
    for ($i = 0; $i < count($leftSum); $i++){
        if($leftSum[$i] !== null and  $rightSum[$i] !== null){
            if($leftSum[$i] === $rightSum[$i]){
                $a = $i;
            }
        }
    }
    if($a !== null) {
        return $a;
    }
    else{
        return -1;
    }
}




echo indexEqualSum(arraySumLeft($ar),arraySumRight($ar)) . "<br>";
echo indexEqualSum(arraySumLeft($ar2),arraySumRight($ar2)) . "<br>";
echo indexEqualSum(arraySumLeft($ar3),arraySumRight($ar3)) . "<br>";
echo indexEqualSum(arraySumLeft($ar4),arraySumRight($ar4)) . "<br>";




