<?php
$username = "super";
$password = "super";
$host = "localhost";
$database = "galata";

mysql_connect($host, $username, $password) or die("Can not connect to database: ".mysql_error());

mysql_select_db($database) or die("Can not select the database: ".mysql_error());
?>