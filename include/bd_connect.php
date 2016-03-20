<?php

	$host='localhost';
	$user='stats_user';
	$pasw='123456789';
	$db='stats';

  $connection=mysql_connect($host,$user,$pasw,$$db);
if(!$connection||!mysql_select_db($db,$connection))
{
	exit(mysql_error());
}
/*else
{
	echo ("true");
}*/
?>