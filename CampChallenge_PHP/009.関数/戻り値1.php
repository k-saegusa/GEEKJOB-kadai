<?php
function myprofile(){
  echo '名前 : 三枝 佳子'."<br>".
  '生年月日 : 1995/3/29'."<br>".
  '自己紹介 : よろしくお願いします。'."<br>";
//  echo myprofile();
  return true;
}
$ans = myprofile();
if($ans == true){
  echo 'この処理は正しく実行できました'."<br>";
}else{
  echo '正しく実行できませんでした'."<br>";
}
?>
