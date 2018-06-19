<?php

/*3)
Є масив $a = [342, 55, 33, 123, 66, 63, 9];
- треба порахувати – скільки всього трійок зустрічається в масиві*/

$a = [342, 55, 33, 123, 66, 63, 9];
$count = 0;




$str = implode('', $a);
$len = strlen($str);
$count = 0;
for ($i = 0; $i < $len; $i++) {
    $count += $str[$i] === '3' ? 1 : 0;
}
echo $count . PHP_EOL;


$str = implode('', $a);
$matches = [];
preg_match_all('/3/', $str, $matches);
echo count($matches[0]);