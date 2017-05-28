<?php
$a = array();
$a['id1'] = '000';
$a['na1'] = '三枝 佳子';
$a['bi1'] = '1995/3/29';
$a['ad1'] = '東京都';

$b = array();
$b['id2'] = '001';
$b['na2'] = '佐藤 花子';
$b['bi2'] = '1990/1/1';
$b['ad2'] = '神奈川県';

$c = array();
$c['id3'] = '002';
$c['na3'] = '山田 太郎';
$c['bi3'] = '1998/5/10';
$c['ad3'] = '千葉県';

$data = array($a,$b,$c);

function prof($p1,$p2){

  if(strpos($p1[0]['na1'],$p2) !== false){
  return $p1[0]['na1'].$p1[0]['bi1'].$p1[0]['ad1'];
  }elseif(strpos($p1[1]['na2'],$p2) !== false){
  return $p1[1]['na2'].$p1[1]['bi2'].$p1[1]['ad2'];
  }elseif(strpos($p1[2]['na3'],$p2) !== false){
  return $p1[2]['na3'].$p1[2]['bi3'].$p1[2]['ad3'];
  }
}

echo prof($data,'山田');
?>
