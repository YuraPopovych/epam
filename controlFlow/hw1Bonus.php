<?php

/*
Compare two strings
by comparing the sum of their values (ASCII character code).
For comparing treat all letters as UpperCase.

Null-Strings should be treated as if they are empty strings.
If the string contains other characters than letters,
 treat the whole string as it would be empty.

Examples:
"AD","BC" -> equal
"AD","DD" -> not equal
"gf","FG" -> equal
"zz1","" -> equal
"ZzZz", "ffPFF" -> equal
"kl", "lz" -> not equal
null, "" -> equal

Your method should return true,
if the strings are equal and false if they are not equal.

*/
$var1 = null;
$var2 = "";

function stringValue($str)
{
    $value = 0;
    if (ctype_alpha($str)) {
        $str = strtoupper($str);
    } else {
        $str = "";
    }

    for ($i = 0; $i < strlen($str); $i++) {
        $value += ord($str[$i]);
    }
    return $value;
}

function compare($string1, $string2)
{
    return var_dump(stringValue($string1) === stringValue($string2));
}

echo compare($var1, $var2);



