<?php
	header("Access-Control-Allow-Origin: *");
	extract($_GET);
	$conn = mysql_connect("localhost", "root", "");
	if (!$conn) 
	{
		die("Could not connect to the database server");
	} 
	
	$db = mysql_select_db("nilmtemp");
	if (!$conn) 
	{
		die("Could not connect to the database");
	}
	$query = "SELECT  first_name,last_name FROM household WHERE username='$username';";
	$res = mysql_query($query);
	if (!$res) 
	{
		die("Could not execute query");
	}
	
	$row = mysql_fetch_array($res);
	echo $row[0].";".$row[1];
?>