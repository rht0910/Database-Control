<!DOCTYPE HTML>
<html>
  <head>
    <title>
      コンフィグファイルを生成中...
    </title>
  </head>
  <body>
<?php
echo "初期化中...<br />";
require_once('function.php');
$conf = $_POST['confirm'];
$host = $_POST['host'];
$user = $_POST['user'];
$port = $_POST['port'];
$sock = $_POST['sock'];

if($conf == "true")
{
  echo "判別中...(ステージ 1)<br />";
  if($conf == null)
  {
    back('./');
  } else {
    echo "判別中...(ステージ 2)<br />";
    if($host == null)
    {
      back('./');
    } else {
      echo "判別中...(ステージ 3)<br />";
      if($user == null)
      {
	back('./');
      } else {
	echo "判別中...(ステージ 4)<br />";
	if($port == null)
	{
	  back('./');
	} else {
	    echo "判別中...(ステージ 5)<br />";
	    if($sock == null)
	    {
	      back('./');
	    } else {
		echo "すべての判別が完了しました。<br /><br />";
		echo "変数を設定中...<br />";
	        $filename = "config.php";
	        $fmode = "x+";
		echo "ファイルをクリーンアップしています...<br />";
	        system('rm -R config.php');
		system('rm -R .htaccess');
		echo "ストリームを開いています...<br />";
	        $fp = fopen($filename, $fmode);
		// ------ Stage 1
		echo "データを設定し、書き込みしています...(ステージ 1)<br />";
		$data = "<?php\n";
	        fputs($fp, $data);
		// ------ Stage 2
		echo "データを設定し、書き込みしています...(ステージ 2)<br />";
		$data = "//\n";
		fputs($fp, $data);
		// ------ Stage 3
		echo "データを設定し、書き込みしています...(ステージ 3)<br />";
		$data = "// Database Control Configuration\n";
		fputs($fp, $data);
		// ------ Stage 4
		echo "データを設定し、書き込みしています...(ステージ 4)<br />";
		$data = "//\n\n";
		fputs($fp, $data);
		// ------ Stage 5
		echo "データを設定し、書き込みしています...(ステージ 5)<br />";
		$data = "// Default Hostname\n";
		fputs($fp, $data);
		// ------ Stage 6
		echo "データを設定し、書き込みしています...(ステージ 6)<br />";
		$data = "\$bhost = \"" . $host . "\";\n\n";
		fputs($fp, $data);
		// ------ Stage 7
		echo "データを設定し、書き込みしています...(ステージ 7)<br />";
		$data = "// Default Username\n\$buser = \"" . $user . "\";\n\n";
		fputs($fp, $data);
		// ------ Stage 8
		echo "データを設定し、書き込みしています...(ステージ 8)<br />";
		$data = "// Default Port\n\$bport = (int) \"" . $port . "\";\n\n";
		fputs($fp, $data);
		// ------ Stage 9
		echo "データを設定し、書き込みしています...(ステージ 9)<br />";
		$data = "// Default MySQL Socket\n\$bsock = \"" . $sock . "\";\n";
		fputs($fp, $data);
		// ------ Write .htaccess (Stage 10)
		echo "データを設定しています...(ステージ 10)<br />";
		$data = "DirectoryIndex index.php";
		// ------ Closing Stream (Stage 11)
		echo "ストリームを閉じています...(ステージ 11)<br />";
		fclose($fp);
		// ------ Opening htaccess only Stream (Stage 12)
		echo "ストリームを開いています...(ステージ 12)<br />";
		$fp2 = fopen(".htaccess", $fmode);
		// ------ Stage 13
		echo "htaccessに書き込みしています...(ステージ 13)<br />";
		fputs($fp2, $data);
		// ------ Closing Stream (Stage 14)
		echo "ストリームを閉じています...(ステージ 14)<br /><br />";
		fclose($fp2);
		// ------ File Cleanup
		echo "ファイルをクリーンアップしています...";
		system("rm -R configure.php");
		// ------ Complete!
		echo "すべての処理が完了しました。<br />";
		?>
		<br />
		<br />
		セットアップが正常に完了しました。
		<br />
		<a href="./" title="Database Control" target="_top">
		  ここ
		</a>
		をクリックして、セットアップを完了させてください。
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
