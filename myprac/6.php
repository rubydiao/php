<?php
    $grade = 74;
    if($grade>=80){
        echo "คะแนน:".$grade,"ได้เกรด : A";
    }
    else if($grade >=75 && $grade<80){
        echo "คะแนน:".$grade,"ได้เกรด : B+";
    }
    else if($grade >=70 && $grade <75){
        echo "คะแนน:".$grade,"ได้เกรด : B";
    }
    else if($grade >=65 && $grade <70){
        echo "คะแนน:".$grade,"ได้เกรด : C+";
    }
    else if($grade >=60 && $grade <65){
        echo "คะแนน:".$grade,"ได้เกรด : C";
    }
    else if($grade >=55 && $grade <60){
        echo "คะแนน:".$grade,"ได้เกรด : D+";
    }
    else if($grade >=50 && $grade <55){
        echo "คะแนน:".$grade,"ได้เกรด : D";
    }
    else if($grade < 50){
        echo "F";
    }
?>