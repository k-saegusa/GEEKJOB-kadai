<?php
function kakezan($a,$b = 5,$c = false){
      $d = $a * $b;
      if($c == true){
        $d = $d * $d;
        echo $a.'×'.$b.'の2乗は',$d.'です。'."<br>";
      }elseif($c == false){
        echo $a.'×'.$b.'は',$d.'です。'."<br>";
      }
    }

kakezan(3,4,true);
kakezan(2);
 ?>