<?php
function prof(){
  $a = array();
  $a['id'] = '000';
  $a['na'] = '三枝 佳子';
  $a['bi'] = '1995/3/29';
  $a['ad'] = '東京都';
  return $a;
}
$profile = prof();
echo $profile['na']."<br>".
$profile['bi']."<br>".
$profile['ad']."<br>";
?>
