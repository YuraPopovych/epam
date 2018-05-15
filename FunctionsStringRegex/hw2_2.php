<?php
#header('Content-Type: text/html; charset=utf-8');
/*
 2)
 Є рядок наступного вигляду: 4 літери, потім пробіл, потім ще 4 літери. Наприклад, такий рядок 'ФЫВА олдж'.
 Треба перетворити на наступний рядок 'АВЫФ ждло'. !!!! UTF-8
 */


$var = 'ФЫВА олдж';

function stringSpaceReverse($str)
{
    $ar = explode(" ", $str);

    $ar2 = $ar;

    for ($i = 0; $i < count($ar2); $i++) {
        $ar2[$i] = '';
    }

    for ($k = 0; $k < count($ar); $k++) {
        for ($i = -1; $i >= (mb_strlen($ar[$k]) * (-1)); $i--) {
            $ar2[$k] .= mb_substr($ar[$k], $i, 1);

        }
    }

    $result = implode(' ', $ar2);
    return $result;

}

echo stringSpaceReverse($var);

/*

#UTF-8 reverse string example from some blog#
$var = 'ФЫВА олдж';
$var = iconv('utf-8', 'utf-16le', $var);
$var = strrev($var);
echo iconv('utf-16be', 'utf-8', $var);


#UTF-8 reverse string example from stackoverflow#
function utf8_strrev($str){
    preg_match_all('/./us', $str, $ar);
    return join('',array_reverse($ar[0]));
}
echo utf8_strrev($var);
*/