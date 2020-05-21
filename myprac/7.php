<?php
$num1 = 1;
$num2 = 2;
$num3 = 3;
if($num1>$num2 && $num1 > $num3){
    echo "1มากสุด: ".$num1;
    echo "<br>";
}
else if($num1<$num2 && $num1 < $num3){
    echo "1น้อยสุด: ".$num1;
    echo "<br>";
}
if($num2>$num1 && $num2 > $num3){
    echo "2มากสุด: ".$num2;
    echo "<br>";
}
else if($num2<$num1 && $num2 < $num3){
    echo "2น้อยสุด: ".$num2;
    echo "<br>";
}
if($num3>$num2 && $num3 > $num1){
    echo "3มากสุด: ".$num3;
    echo "<br>";
}
else if($num3<$num2 && $num3 < $num1){
    echo "3น้อยสุด: ".$num3;
    echo "<br>";
}
$avg = ($num1+$num2+$num3)/3;
echo "avg :".$avg;
?>