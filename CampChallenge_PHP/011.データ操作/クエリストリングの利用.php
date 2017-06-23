<html>
  <head>
    <meta charset="utf-8">
    <title>テスト</title>
  </head>
  <body>
    <form action="TEST.php" method="GET">
      <b>■総額<br><b>
      <input type="text" name='yen'>円
      <br>
      <b>■個数<br><b>
      <input type="text" name='kosuu'>個
      <br>
      <b>■商品種別<br><b>
        <input type="radio" name="syubetu" value="雑貨">1
        <input type="radio" name="syubetu" value="生鮮食品">2
        <input type="radio" name="syubetu" value="その他">3
      <br>
      <input type="submit" name="btnSubmit"><br>
    </form>
  </body>
</html>

<?php
foreach($_GET as $name => $value){
  $$name = $value;
}

$nedan = $yen / $kosuu;

echo '商品種別は'.$syubetu.'です<br>'.
'総額'.$yen.'円<br>'.
$kosuu.'個購入したので、1個あたりの値段は'.$nedan.'円です。<br>';

if($yen >= 3000){
  $pt4 = $yen * 0.04;
  echo '総額が3000円以上なので、'.$pt4.'ポイント付きました。';
}elseif($yen >= 5000){
  $pt5 = $yen * 0.05;
  echo '総額が5000円以上なので、'.$pt5.'ポイント付きました。';
}elseif($yen < 3000){
  echo '総額が3000円未満なのでポイントはつきません';
}

?>
