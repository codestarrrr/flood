<?php
error_reporting(E_ALL ^ E_DEPRECATED);

$db_host		= 'localhost';
$db_user		= 'u899058486_flood';
$db_pass		= 'serenity15';
$db_database	= 'u899058486_flood'; 

$link = mysql_connect($db_host,$db_user,$db_pass) or die('Unable to establish a DB connection');

mysql_select_db($db_database,$link);
mysql_query("SET names UTF8");

?>