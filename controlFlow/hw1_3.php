<?php

/*
3)
Якщо змінна $a більша нуля и менша 5-ти, то вивести 'Вірно',
інакше 'Невірно'. Перевірте роботу скрипта при $a, зі значеннями - 5, 0, -3, 2*/


$a = [-5, 0, -3, 2];
foreach ($a as $i) {
    $result = ((5 > $i) and ($i > 0))? "Вірно" : "Невірно";
    echo "\$a=" . "$i" . " $result". '<br>';
}
