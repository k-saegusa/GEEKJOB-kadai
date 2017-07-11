<html>
  <head>
    <meta charset="utf-8">
    <title>テスト</title>
  </head>
  <body>
    <form action="TEST.php" method="GET">
      <b>■値を入力してください<br><b>
      <input type="text" name='atai'>
      <br>
      <input type="submit" name="btnSubmit" value="送信"><br>
    </form>
  </body>
</html>

<?php
foreach($_GET as $name => $value){
  $$name = $value;
}

$a= array(2,3,5,7);

echo '元の値：'.$atai."<br>".'一桁の素因数：';

foreach($a as $value) {
  while ($atai%$value==0){
    $atai=$atai/$value;
  }
  echo $value."\n";
}
echo "<br>".'余った値：'.$atai;
?>
