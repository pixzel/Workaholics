<?php
$mysql_hostname = "markensgate.mysql.domeneshop.no";
$mysql_user = "markensgate";
$mysql_password = "BJEYv8MK";
$mysql_database = "markensgate";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");
?>