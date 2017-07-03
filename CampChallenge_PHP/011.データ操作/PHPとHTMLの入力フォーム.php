<html>
  <head>
    <meta charset="utf-8">
    <title>テスト</title>
  </head>
  <body>
    <form action="TEST.php" method="post">
      <b>■名前を入力してください<br><b>
        <input type="text" name="text" value="<?=$_POST["text"]?>">
        <br>
      <b>■性別を入力してください<br><b>
        <?php ($_POST["radio"]=="男")?$val="checked":$val=""; ?>
        <input type="radio" name="radio" value="男"<?=$val?>>男
        <?php ($_POST["radio"]=="女")?$val="checked":$val=""; ?>
        <input type="radio" name="radio" value="女"<?=$val?>>女
        <br>
      <b>■趣味を入力してください<br><b>
      <textarea rows="8" cols="80" name='textarea'><?=$_POST['textarea']?>
      </textarea>
      <br>
      <input type="submit" name="btnSubmit"><br>
    </form>
  </body>
</html>
