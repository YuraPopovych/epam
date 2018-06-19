<?php
/*
2)
Є масив:
$temperatures = array(33, 15, 17, 20, 23, 23, 28, 40, 21, 19, 31,
18, 30, 31, 28, 23, 19, 28, 27, 30, 39, 17, 17, 20, 19, 23, 28, 30, 34, 28);
Знайти три найменших значення, три найбільших і три середніх.

 */

$temperatures = array(33, 15, 17, 20, 23, 23, 28, 40, 21, 19, 31,
    18, 30, 31, 28, 23, 19, 28, 27, 30, 39, 17, 17, 20, 19, 23, 28, 30, 34, 28);

$avgValueIndex = (count($temperatures)-1)/2;
sort($temperatures);

$minValue = array_slice($temperatures,0,3);

$maxValue = array_slice($temperatures,-3);

$avgValue = array_slice($temperatures,$avgValueIndex-1,3);

echo '3 найменші значення ' . implode('; ',$minValue) . '<br>';
echo '3 середні значення ' . implode('; ',$avgValue) . '<br>';
echo '3 найбільші значення ' . implode('; ',$maxValue) . '<br>';
?>
<pre>
    <?php print_r($temperatures); ?>

</pre>


