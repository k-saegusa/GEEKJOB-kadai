<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>テスト</title>
  </head>
  <body>
    <form enctype="multipart/form-data" action="TEST.php" method="post">
      <input type="file" name="file">
      <input type="submit" value="送信">
<?php
# var_dump($_FILES['file']);
$a='./img/'.$_FILES['file']['name'];
$a=mb_convert_encoding($a,"cp932","utf8");
if(move_uploaded_file($_FILES['file']['tmp_name'],$a)){
  echo file_get_contents($a);
}
?>
  </form>
  </body>
</html>