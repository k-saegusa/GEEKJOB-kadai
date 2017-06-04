<?php
date_default_timezone_set('Asia/Tokyo');
$now = date('Y/m/d H:i:s');

//array_push関数で$kudamonoにぶどうを追加して表示

error_log($now."\n"."処理開始"."<br>",3,'log.txt');

$kudamono = array('いちご','りんご','バナナ');
array_push($kudamono,'ぶどう');
foreach($kudamono as $a){
  echo $a;
}
error_log($now."\n"."処理完了"."<br>",3,'log.txt');
echo file_get_contents('log.txt');
?>
