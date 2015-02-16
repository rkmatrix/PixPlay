<?php

	//connect to database
	$username = "super";
	$password = "super";
	$host = "localhost";
	$database = "galata";

	mysql_connect($host, $username, $password) or die("Can not connect to database: ".mysql_error());

	mysql_select_db($database) or die("Can not select the database: ".mysql_error());

	if(isset($_GET['id']))
	{
		$id = mysql_real_escape_string($_GET['id']);$catname = mysql_real_escape_string($_GET['catname']);
		$query = mysql_query("SELECT image from $catname where id='$id'");
		
		while($row = mysql_fetch_assoc($query))
		{
			$imageData = $row["image"];
		}
		
		echo $imageData;
	}
	else
	{
		echo "Error!";
	}
	
	
	
	?>