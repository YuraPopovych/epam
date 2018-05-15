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


function advSort($ar){
    sort($ar);
    $avg = (count($ar)-1) / 2;
    for($i = 0; $i < 3; $i++){
        $min[] = $ar[$i];
    }
    for ($i = (count($ar) -1 ); $i > (count($ar) -4); $i-- ){
        $max[] = $ar[$i];
    }
    #$threeAvg[] = $ar
    for ($i = $avg -1; $i < ($avg + 2); $i++){
        $threeAvg[] = $ar[$i];
    }

    echo "3 найменші значення:" . "<br>";
    foreach ($min as $n){
        echo $n . "<br>";
    }

    echo "3 середні значення:" . "<br>";
    foreach ($threeAvg as $n){
        echo $n . "<br>";
    }

    echo "3 найбільші значення:" . "<br>";
    for ($i = count($max) - 1; $i >= 0; $i--){
        echo $max[$i] . "<br>";
    }

}
advSort($temperatures);


?>

<pre>
    <?php
        echo "<br>";
        sort($temperatures);
        print_r($temperatures);
        $var  =14.5;
        settype($var, "int");
        echo $var;
    ?>
</pre>


