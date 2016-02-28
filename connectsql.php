<?php
//this code connects to the Mysql database
$dbhost ="localhost";
$dbuser ="root";
$dbpass ="";
$connectsql = mysql_Connect( $dbhost ,$dbuser, $dbpass);
	if(!$connectsql)
		die('no: ' . mysql_error());
	//else echo "succesful connection";
$dbname = 'db_bboynation';
mysql_Select_db($dbname) or die("error select");
?>
