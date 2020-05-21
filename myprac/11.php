<?php
    $data = array(5,4,3,2,1);
    echo "เลขชุดในArray","<br>";
    for($i = 0 ; $i < sizeof($data) ; $i++){
        echo $data[$i]," ";
    }
    echo "<br>";
    sort($data);
    echo "น้อยสุด:",$data[0],"<br>";
    echo "มากสุด:",$data[4],"<br>";
    echo "ผลรวม:",array_sum($data),"<br>";
    echo "ค่าเฉลี่ย:",array_sum($data)/sizeof($data),"<br>";


?>