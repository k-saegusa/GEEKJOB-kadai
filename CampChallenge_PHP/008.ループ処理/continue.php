<?php
$a = array(1,2,3,4,5,6,7,8,9);
$b = array(1,2,3,4,5,6,7,8,9);
$total = 1;

foreach($a as $value1){
  if($value1 == 5){
    echo '【5の段はスキップします】'."<br>";
    continue;   
  }
  foreach($b as $value2){
    $total = $value1 * $value2;
    echo $value1.'×'.$value2.'='.$total."<br>";
  }
}
?>
