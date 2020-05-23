<?php
	$host="localhost";
	$dbUsername="root";
	$dbPassword="";
	$dbname="job";
	$con=Mysql_connect($host,$dbUsername,$dbPassword);
	$dat=mysql_select_db($dbname,$con);
?>