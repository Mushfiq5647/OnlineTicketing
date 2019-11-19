<?php
$con = mysql_connect('localhost', 'root', '');
if(!$con)
	{
			die('Could not connected'.mysql_error());
	}
	echo "Connected";
	mysql_select_db('O_DB',$con);

	
?>