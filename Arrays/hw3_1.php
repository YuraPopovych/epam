<?php
/*
1)
Є масив з довільними числами.
Зробіть так,
,щоб елемент повторився в масиві таку кількість разів яка відповідає його числу.
Приклад: [1, 3, 2, 4] перетворюється в [1, 3, 3, 3, 2, 2, 4, 4, 4, 4].
 */
$ar = [1,3,2,4];
foreach ($ar as $i) {
    for ($n = 1; $n < $i; $n++) {
        $ar[] = $i;
    }
}
sort($ar);

?>

<pre>
    <?php print_r($ar);?>

</pre>
