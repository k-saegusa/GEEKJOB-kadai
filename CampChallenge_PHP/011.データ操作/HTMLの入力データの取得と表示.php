<html>
  <head>
    <meta charset="utf-8">
    <title>テスト</title>
  </head>
  <body>
    <form action="TEST.php" method="post">
      ■名前を入力してください<br>
      <input type="text" name='text'>
      <br>
      ■性別を選択してください<br>
      <input type="radio" name='radio' value='男性'><label>男性</label>
      <input type="radio" name='radio' value='女性'><label>女性</label>
      <br>
      ■趣味を入力してください<br>
      <textarea rows="8" cols="80" name='textarea'></textarea>
      <br>
      <input type="submit" name="btnSubmit">
    </form>
  </body>
</html>

<?php
echo $_POST['text']."<br>";
echo $_POST['radio']."<br>";
echo $_POST['textarea']."<br>";
?>
