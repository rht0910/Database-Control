<!DOCTYPE HTML>
<html>
  <head>
    <title>
      Database Controlのセットアップ
    </title>
    <link rel="stylesheet" href="base.css" type="text/css" type="text\css">
  </head>
  <body class="center">
<?php
system("./setup");
echo "初期化が完了しました。[注意:Microsoft Edgeの場合、cssが適用されない可能性があります。]";
$confirm = $_POST['conf'];
$host = $_POST['host'];
$port = $_POST['port'];
$sock = $_POST['sock'];
if($confirm != "true") {
?>
    <form action="configure.php" method="post">
      デフォルト ホスト：<input type="text" name="host" placeholder="ホスト" />(推奨：'127.0.0.1'、'localhost')
      <br />
      デフォルト ポート：<input type="text" name="port" value="3306" placeholder="ポート" />
      <br />
      デフォルト ソケット：<input type="text" name="sock" value="/var/run/mysqld/mysqld.sock" placeholder="ソケット" />
      <input type="hidden" name="conf" value="true" />
      <!-- 上のコードは確認画面に進むために必要です -->
      <br />
      <input type="reset" value="リセット" />
      <input type="submit" value="送信" />
      <br />
      <br />
      <a href="http://php.net/manual/ja/mysqli.construct.php" title="PHP: mysqli::__construct">説明についてはphpのマニュアルをご覧ください。</a>
    </form>
<?php
} elseif($confirm == "true") {
?>
    <form action="config-set.php" method="post">
      <string class="blue">この内容でよろしいですか？</string>
      <br />
      <string class="green">このセットアップが完了したら、このファイルは削除されます。再セットアップする場合は、're-config.php'を実行してください。</string>
      <br />
      <string class="red">ソケット、ポート、ユーザー、ホストのいずれか1つでも <func class="type">null</func> の場合は、設定画面に戻ります。</string>
      <br />
      <pre class="gray">
	<br />
	デフォルト ホスト：<?=$host?>
	<br />
	デフォルト ポート：<?=$port?>
	<br />
	デフォルト ソケット：<?=$sock?>
	<br />
      </pre>
      <input type="hidden" name="host" value="<?=$host?>" />
      <input type="hidden" name="user" value="root" />
      <input type="hidden" name="port" value="<?=$port?>" />
      <input type="hidden" name="sock" value="<?=$sock?>" />
      <input type="hidden" name="confirm" value="true" />
      <!-- 上のinputタグはconfig.phpへの書き込みのために必要です。 -->
      <input type="submit" value="設定ファイルを作成" />
      <br />
      <br />
      <a href="configure.php" target="_top" title="リセット">セットアップをリセットする</a>
    </form>
<?php
}
?>
  </body>
</html>
