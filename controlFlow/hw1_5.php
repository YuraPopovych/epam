<?php

#5#
#В змінній $year збігається рік. Визначте чи є він високосним.
#Рік буде високосним в двох випадках: або він ділиться на 4, але при цьому не ділиться на 100, або ділиться на 400.
$year =[1804, 1904, 2096, 2196, 2208, 2376,1807, 1911, 2099, 2197,2211,2018 ];

function leap($year){
    if ( (($year % 4) === 0) and (($year % 100) !== 0)  ){
        return " $year is leap year";

    }
    elseif( ($year % 400) === 0){
        return "$year is leap year";
    }
    else{
        return "$year is common year";
    }
}


foreach ($year as $yr){
    echo leap($yr) . "<br>";
}


?>