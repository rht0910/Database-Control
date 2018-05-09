<!DOCTYPE HTML>
<html>
<head>
<title>
MySQLi - マルチクエリ
</title>
</head>
<body>
<?php
require_once('function.php');
require_once('config.php');
$host = $_POST['host'];
$port = (int) $_POST['port'];
$sock = $_POST['sock'];
$db = $_POST['db'];
$pass = $_POST['pass'];
$query = $_POST['query'];
$user = $_POST['user'];

$report = new report();
$report->false();

$check = new check();

$check->host(); // Check hostname
$check->data(); // Check database
$check->port(); // Check Port
$check->sock(); // Check Socket

$link = mysqli_connect($host, $user, $pass, $db, $port, $sock);

if(!$link) {
    die('接続エラー(' . mysqli_connect_errno() . ')' . mysqli_connect_error());
}

echo "成功..." . mysqli_get_host_info($link) . "<br />\n";

if(!mysqli_set_charset($link, "utf8")) {
    printf("文字セット(UTF-8)の読み込みに失敗しました: %s\n", mysqli_error($link));
    exit;
} else {
    printf("現在の文字セット： %s\n", mysqli_character_set_name($link));
}

$query = mysqli_real_escape_string($link, $query);

/* 複数のクエリを実行します */
echo "<br />クエリを実行中...<br />----------クエリ----------<br />";
if(mysqli_multi_query($link, $query)) {
    do {
	/* 最初の結果セットを取得します */
	if($result = mysqli_use_result($link)) {
	    while($row = mysqli_fetch_row($result)) {
		printf("%s\n", $row[0]);
	    }
	    mysqli_free_result($result);
	}
	/* 区切り線を表示します */
	if(mysqli_more_results($link)) {
	    printf("---------------\n");
	}
    } while(mysqli_next_result($link));
}
echo "<br />--------------------<br />";
echo "接続を閉じています...<br />";
mysqli_close($link);
echo "接続を閉じました。<br />";
?>
<br />
<a href="./" title="back">戻る</a>
</body>
</html>
