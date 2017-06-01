<?php
$time1 = mktime(0,0,0,1,1,2015);
$time2 = mktime(23,59,59,12,31,2015);

$time3 = $time2 - $time1;

echo $time3;
 ?>
