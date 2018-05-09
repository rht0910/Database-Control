<?php
if(file_exists("configure.php")) {
die("<!DOCTYPE HTML><html><head><title>セットアップ未完了</title></head><body>まだセットアップが完了していません。<br />先にセットアップをしてください。<br />セットアップは<a href=\"configure.php\">ここから</a>できます。</body></html>");
exit;
}
require_once("config.php");
?>
<!DOCTYPE HTML>
<html>
  <head>
    <title>
      Database Control
    </title>
  </head>
  <body>
    <form action="sql.php" method="post">
      ホスト：<input type="text" name="host" value="<?=$bhost?>" placeholder="ホスト" />
      <br />
      ユーザー：<input type="text" name="user" value="<?=$buser?>" placeholder="ユーザー" />
      <br />
      <?=$buser?>のパスワード：<input type="password" name="pass" placeholder="パスワード" require />
      <br />
      ポート：<input type="number" name="port" value="<?=$bport?>" placeholder="ポート" />
      <br />
      ソケット：<input type="text" name="sock" value="<?=$bsock?>" placeholder="ソケット" />
      <br />
      データベース：<input type="text" name="db" />
      <br />
      クエリ：<textarea rows="30" cols="50" name="query" require></textarea>
      <br />
      <input type="reset" value="リセット" />
      <input type="submit" value="送信" />
    </form>
  </body>
</html>
