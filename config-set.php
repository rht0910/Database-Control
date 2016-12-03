<!DOCTYPE HTML>
<html>
  <head>
    <title>
      コンフィグファイルを生成中...
    </title>
    <script src="echo.js" type="text/javascript">
  </head>
  <body>
<?php
require_once('function.php');
$conf = $_POST['confirm'];
$host = $_POST['host'];
$user = $_POST['user'];
$port = $_POST['port'];
$sock = $_POST['sock'];

if($conf == "true")
{
  if($conf == null)
  {
    back('./');
  } else {
    if($host == null)
    {
      back('./');
    } else {
      if($user == null)
      {
	back('./');
      } else {
	if($port == null)
	{
	  back('./');
	} else {
	    if($sock == null)
	    {
	      back('./');
	    } else {
		$utils = new utils();
		$filename = "config.php";
	        $fmode = "x+";
		$utils->init();
		echo "<script type=\"text/javascript\">";
		echo "open();";
		echo "echo(\"初期.htaccessを生成しています...<br />\");";
		print('</script>');
		$utils->gen_htaccess();
		echo '<script type="text/javascript">';
		echo "echo(\"ストリームを開いています...<br />\");";
		echo '</script>';
	        $fp = fopen($filename, $fmode);
		// ------ Stage 1
		echo '<script type="text/javascript">';
		echo 'echo("データを設定し、書き込みしています...(ステージ 1)<br />");';
		echo '</script>';
		$data = "<?php\n";
	        fputs($fp, $data);
		// ------ Stage 2
		echo '<script type="text/javascript">';
		echo 'echo("データを設定し、書き込みしています...(ステージ 2)<br />");';
		echo '</script>';
		$data = "//\n";
		fputs($fp, $data);
		// ------ Stage 3
		echo '<script type="text/javascript">';
		echo 'echo("データを設定し、書き込みしています...(ステージ 3)<br />");';
		echo '</script>';
		$data = "// Database Control Configuration\n";
		fputs($fp, $data);
		// ------ Stage 4
		echo '<script type="text/javascript">';
		echo 'echo("データを設定し、書き込みしています...(ステージ 4)<br />");';
		echo '</script>';
		$data = "//\n\n";
		fputs($fp, $data);
		// ------ Stage 5
		echo '<script type="text/javascript">';
		echo 'echo("データを設定し、書き込みしています...(ステージ 5)<br />");';
		echo '</script>';
		$data = "// Default Hostname\n";
		fputs($fp, $data);
		// ------ Stage 6
		echo '<script type="text/javascript">';
		echo 'echo("データを設定し、書き込みしています...(ステージ 6)<br />");';
		echo '</script>';
		$data = "\$bhost = \"" . $host . "\";\n\n";
		fputs($fp, $data);
		// ------ Stage 7
		echo '<script type="text/javascript">';
		echo 'echo("データを設定し、書き込みしています...(ステージ 7)<br />");';
		echo '</script>';
		$data = "// Default Username\n\$buser = \"" . $user . "\";\n\n";
		fputs($fp, $data);
		// ------ Stage 8
		echo '<script type="text/javascript">';
		echo 'echo("データを設定し、書き込みしています...(ステージ 8)<br />");';
		echo '</script>';
		$data = "// Default Port\n\$bport = (int) \"" . $port . "\";\n\n";
		fputs($fp, $data);
		// ------ Stage 9
		echo '<script type="text/javascript">';
		echo 'echo("データを設定し、書き込みしています...(ステージ 9)<br />");';
		echo '</script>';
		$data = "// Default MySQL Socket\n\$bsock = \"" . $sock . "\";\n";
		fputs($fp, $data);
		// ------ Write .htaccess (Stage 10)
		echo '<script type="text/javascript">';
		echo 'echo("データを設定しています...(ステージ 10)<br />");';
		echo '</script>';
		$data = "DirectoryIndex index.php";
		// ------ Closing Stream (Stage 11)
		?>
		<script type="text/javascript">
		echo("ストリームを閉じています...(ステージ 11)<br />");
		</script>
		<?php
		fclose($fp);
		// ------ Opening htaccess only Stream (Stage 12)
		?>
		<script type="text/javascript">
		echo("ストリームを開いています...(ステージ 12)<br />");
		</script>
		<?php
		$fp2 = fopen(".htaccess", $fmode);
		// ------ Stage 13
		?>
		<script type="text/javascript">
		echo("htaccessに書き込みしています...(ステージ 13)<br />");
		</script>
		<?php
		fputs($fp2, $data);
		// ------ Closing Stream (Stage 14)
		?>
		<script type="text/javascript">
		echo("ストリームを閉じています...(ステージ 14)<br /><br />");
		</script>
		<?php
		fclose($fp2);
		// ------ File Cleanup
		?>
		<script type="text/javascript">
		echo("ファイルをクリーンアップしています...");
		</script>
		<?php
		system("rm -R configure.php");
		// ------ Complete!
		?>
		<script type="text/javascript">
		echo("すべての処理が完了しました。<br />");
		</script>
		<br />
		<br />
		<script type="text/javascript">
		echo("セットアップが正常に完了しました。");
		</script>
		<br />
		<script type="text/javascript">
		echo("<a href=\"./\" title=\"Database Control\" target=\"_top\">ここ</a>をクリックして、セットアップを完了させてください。");
		close();
		</script>
		<?php
	    }
	}
      }
    }
  }


} else {
    back('./');
}

?>
  </body>
</html>
