<?php

function back($link)
{
    if($link == null)
    {
	trigger_error("\$link が存在しないため、ファンクションを実行できません。", E_USER_ERROR);
    } else {
	echo "<br /><a href=\"./\" title=\"戻る\">戻る</a><br />";
    }
}

// ------ Using sql.php

class check
{
    function host()
    {
	if($host == null)
	{
	    $host = $bhost;
	}
    }

    function user()
    {
	$user = $buser;
	if($user == null)
	{
	    $user = "root";
	}
    }

    function port()
    {
	if($port == null)
	{
	    $port = $bport;
	}
    }

    function pass()
    {
	trigger_error("This function is Deprecated.", E_USER_DEPRECATED);
	if($pass == null)
	{
	    back('./');
	}
    }

    function sock()
    {
	if($sock == null)
	{
	    $sock = $bsock;
	}
    }
    function data()
    {
	if($db == null)
	{
	    $db = null;
	}
    }
    function query()
    {
	trigger_error("This function is Deprecated.", E_USER_DEPRECATED);
	if($query == null)
	{
	    back('./');
	}
    }
}

class report
{
    function false()
    {
	ini_set('display_errors', "Off");
    }

    function true()
    {
	ini_set('display_errors', "On");
	error_reporting(E_ALL);
    }
}

// -- Using config-set.php, delete.php

class utils
{
    function init()
    {
        system("rm -R .htaccess");
        system("rm -R config.php");
    }

    function gen_htaccess()
    {/*
        $data = "//DirectoryIndex index.php\n\n# Auth password is 'sql_control', user is 'sql'\n# AuthType is Digest, Please enable httpd module:'auth_digest', disable 'auth_basic'\nAuthType Digest\nAu";
        $filename = "";
        $fmode = "x+";
        $fp = fopen($filename, $fmode);
        fputs($fp, $data);
        fclose($fp);
    */}

    function delete_configure()
    {
	$dir = __DIR__;
	system("rm -f $dir/configure.php", $returm);
	return $returm;
    }
}
