<html>
  <head>
    <meta charset="utf-8">
    <title>テスト</title>
  </head>
  <body bgcolor="#00FFFF">
    <form action="TEST.php" method="post">
      <b>■名前を入力してください<br><b>
      <input type="text" name='text'>
      <br>
      <b>■性別を選択してください<br><b>
      <input type="radio" name='radio' value='男性'><label>男性</label>
      <input type="radio" name='radio' value='女性'><label>女性</label>
      <br>
      <b>■趣味を入力してください<br><b>
      <textarea rows="8" cols="80" name='textarea'></textarea>
      <br>
      <input type="submit" name="btnSubmit"><br>
    </form>
  </body>
</html>

<?php
echo $_POST['text']."<br>";
echo $_POST['radio']."<br>";
echo $_POST['textarea']."<br>";
?>
