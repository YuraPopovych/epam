<?php
/*
We have chars mapping: A => T, C => G. ]
You need to create a converter for strings with the results:
"ATTGC" -> returns "TAACG", "GTAT" -> returns "CATA"
 */

function calculate($test)
{
    /*$result = '';
    foreach ($test as $i) {
        $key  = array_search($i, $ar);
        if (!$key) {
            $result .= $i;
        } elseif ($ar[$i]) {
            $result .= $ar[$i];
        }
    }*/

    $ar = [
        'A' => 'T',
        'C' => 'G',
        'T' => 'A',
        'G' => 'C',
    ];



    return strtr($test,$ar);
}

