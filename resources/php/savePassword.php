<?php
	header("Access-Control-Allow-Origin: *");
	extract($_GET);
	$conn = mysql_connect("localhost", "root", "");
	if (!$conn) 
	{
		die("Could not connect to the database server");
	} 
	
	$db = mysql_select_db("nilmdb");
	if (!$conn) 
	{
		die("Could not connect to the database");
	}
	
	$query = "UPDATE household set password='$password' WHERE username='$username';";
	$res = mysql_query($query);
	if (!$res) 
	{
		die("Could not execute query");
	}
	echo "Password set";
?>