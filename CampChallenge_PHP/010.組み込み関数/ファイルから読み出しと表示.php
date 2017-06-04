<?php
$file1 = fopen('testtest.txt','r');
if($file1 != false){
  echo fgets($file1);
  fclose($file1);
}
?>
