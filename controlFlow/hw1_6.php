<?php

/*
6)
Є рядок з 6-ти чисел (наприклад: 385934).
Перевірте, чи сума перших трьох чисел дорівнює сумі других трьох чисел.
Якщо це так – виведіть 'так' інакше – 'ні'
*/

$first = 0;
$second = 0;
$a = '385934';
$len = strlen($a);
$half = $len / 2;

for ($i = 0; $i < $half; $i++) {
    $first += $a[$i];
}

for ($i = $half; $i < $len; $i++) {
    $second += $a[$i];
}

if ($first === $second) {
    echo 'так';
} else {
    echo 'ні';
}

