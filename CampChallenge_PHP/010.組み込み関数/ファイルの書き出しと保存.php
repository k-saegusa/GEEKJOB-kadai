<?php
$file = fopen('testtest.txt','w');
$prof = '三枝佳子です。よろしくお願いします。';

if($file != false){
  fwrite($file,$prof);
  fclose($file);
}
?>
