<?php
require_once( 'function.php' );
$report = new report();
$utils = new utils();
$report->true();
$result = $utils->delete_configure();
echo "状況コード：".$result;
