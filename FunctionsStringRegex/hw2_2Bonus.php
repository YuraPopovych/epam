<?php
/*
We have chars mapping: A => T, C => G. ]
You need to create a converter for strings with the results: "ATTGC" -> returns "TAACG", "GTAT" -> returns "CATA"
 */


$ar = [
    'A' => 'T',
    'C' => 'G'
];

$test = ['G' ,'T', 'A', 'T'];
$result = '';
foreach ($test as $i){

    if (array_search($i, $ar)){
        $result .= array_search($i, $ar);
    }
    elseif($ar[$i]){
        $result .= $ar[$i];
    }
}
echo $result;
?>