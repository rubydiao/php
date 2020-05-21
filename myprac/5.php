<?php
   $second = 4000;
   $hour = intval($second/3600);
   $minute = intval(($second-(3600-$hour))/60);
   $sumsec = intval(abs(($second-(3600*$hour)-($minute*60))));

   echo $hour,":",$minute,":",$sumsec;
?>