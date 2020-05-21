<?php
    $sum = 0 ;
    for($i = 1 ; $i<=10 ; $i++){
        $sum+=$i;
    }
    echo "ผลรวมเท่ากับ= ". $sum , "<br>";
    $avg = $sum/10;
    echo "ค่าเฉลี่ยเท่ากับ= ". $avg;
?>